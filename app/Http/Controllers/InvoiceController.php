<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController
{
    public function index()
    {
        //
    }

    public function create()
    {
        // $client = new Party([
        //     'name'          => 'Demo Client',
        //     'phone'         => '(520) 318-9486',
        //     'custom_fields' => [
        //         'note'        => 'IDDQD',
        //         'business id' => '365#GG',
        //     ],
        // ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $items = [
            (new InvoiceItem())
                ->title('Service 1')
                ->description('Your product or service description')
                ->pricePerUnit(47.79)
                ->quantity(2)
                ->discount(10),
            (new InvoiceItem())->title('Service 2')->pricePerUnit(71.96)->quantity(2),
            (new InvoiceItem())->title('Service 4')->pricePerUnit(87.51)->quantity(7)->discount(4)->units('kg'),
            (new InvoiceItem())->title('Service 20')->pricePerUnit(55.80),
        ];

        $notes = [
            'your multiline',
            'additional notes',
            'in regards of delivery or something else',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make()
                    ->buyer($customer)
                    //->discountByPercent(10)
                    ->taxRate(15)
                    ->shipping(1.99)
                    ->addItems($items)
                    ->logo(public_path('assets/images/solarvilla/logo/solarvilla-logo-light.webp'));
                    //->save('public');

        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->stream();
        return view('invoices.index', compact('invoice'));
    }

    public function store(Request $request)
    {
    }

    public function show(String $invoice_number)
    {
        $invoice = \App\Models\Invoice::with('buyer')->where('invoice_number', '=', $invoice_number)->get();
        //return $invoice->pluck('buyer')[0]->email;
        foreach($invoice as $invoice_details)
        {
            $items[] = (new InvoiceItem())
                        ->title((string)$invoice_details->product_name)
                        ->description((string)$invoice_details->description ? $invoice_details->description : ' ')
                        ->pricePerUnit((float)$invoice_details->price)
                        ->quantity((int)$invoice_details->quantity)
                        ->discount((int)$invoice_details->discount);
        }

        $customer = new Buyer([
            'name'          => $invoice->pluck('buyer')[0]->name,
            'phone'         => $invoice->pluck('buyer')[0]->phone,
            'email'         => $invoice->pluck('buyer')[0]->email,
            'address'       => $invoice->pluck('buyer')[0]->address,
        ]);

        $notes = [
            'We really appreciate your business and if there is anything else we can do, please let us know!',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->taxRate(12)
            ->date(now())
            ->shipping(200)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('assets/images/solarvilla/logo/solarvilla-logo-light.webp'));
            //->save();

        return $invoice->stream();

        return view('invoices.show', compact('invoice'));
    }

    public function edit(int $id)
    {
    }

    public function update(Request $request, int $id)
    {
    }

    public function destroy(int $id)
    {
    }
}
