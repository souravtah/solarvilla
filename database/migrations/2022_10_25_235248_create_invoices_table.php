<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('invoice_number');
            $table->unsignedBigInteger('product_id');
            $table->string('product_name');
            $table->unsignedInteger('price');
            $table->unsignedInteger('quantity');
            $table->string('description');
            $table->unsignedInteger('discount')->default(0);
            $table->unsignedInteger('shipping')->default(0);
            $table->unsignedInteger('gst')->default(0);
            $table->timestamps();
        });
    }
};
