<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketLabelController;
use App\Http\Controllers\TicketCategoryController;
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
    return view('welcome');
})->name('index_page');

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

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


    Route::resource('users', UserController::class)->except(['create']);
    Route::resource('ticket-categories', TicketCategoryController::class)->except(['show', 'edit', 'create']);
    Route::resource('tickets', TicketController::class);
    Route::resource('ticket-labels', TicketLabelController::class);

});
