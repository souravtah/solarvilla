<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketLabelController;
use App\Http\Controllers\TicketCategoryController;
use App\Http\Controllers\ProductCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guests.home');
})->name('index_page');

Route::post('tickets/create/quote', [HomeController::class, 'store_quote_request'])->name('tickets.create_quote');
Route::get('tickets/view-ticket-status', [HomeController::class, 'get_ticket_id'])->name('tickets.view_ticket_status');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'users.about')->name('about');

    Route::get('users/role/{roleName}', [UserController::class, 'role_wise_index'])->name('users.rolewise.index');
    Route::get('users-without-roles', [UserController::class, 'users_without_any_role'])->name('users.withoutrole.index');
    Route::get('users-with-trashed', [UserController::class, 'users_with_trashed'])->name('users.withtrashed.index');
    Route::get('users/{user}/restore', [UserController::class, 'restore'])->name('users.restore');
    Route::get('users/{user}/activities', [UserController::class, 'activity'])->name('users.activity');
    Route::get('users/{user}/settings', [UserController::class, 'setting'])->name('users.setting');
    Route::delete('users/{user}/force-delete', [UserController::class, 'force_delete'])->name('users.force_delete');
    Route::get('users/help/get-help', [HomeController::class, 'get_help'])->name('users.get_help');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('tickets/view/all/pending', [TicketController::class, 'view_all_pending_tickets'])->name('tickets.view_all_pending_tickets');
    Route::get('tickets/view/resolved', [TicketController::class, 'view_resolved_tickets'])->name('tickets.view_resolved');
    Route::post('tickets/create/call', [TicketController::class, 'store_call_request'])->name('tickets.create_call');

    Route::post('add-to-cart', [ProductController::class, 'add_to_cart'])->name('add_to_cart');
    Route::post('delete-item-from-cart', [CartController::class, 'delete_a_cart_item'])->name('delete_a_cart_item');
    Route::post('empty-cart', [CartController::class, 'empty_cart'])->name('empty_cart');

    Route::resource('users', UserController::class)->except(['create']);
    Route::resource('ticket-categories', TicketCategoryController::class)->except(['show', 'edit', 'create']);
    Route::resource('tickets', TicketController::class)->except(['destroy']);
    Route::resource('ticket-labels', TicketLabelController::class)->except(['destroy']);
    Route::resource('invoices', InvoiceController::class)->except(['destroy']);
    Route::resource('products', ProductController::class);
    Route::resource('product-categories', ProductCategoryController::class);
    Route::resource('carts', CartController::class);

});
