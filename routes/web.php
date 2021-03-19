<?php

use \Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UpdateContact;



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

});

//Routes for Contactform
Route::get('contact-us', [ContactController::class, 'getContact']);
Route::post('contact-us', [ContactController::class, 'saveContact']);

//Routes for edit_form.
Route::view('edit_form', 'edit_form');
Route::post('update', [UpdateContact::class, 'update']);

//Routes with Signed function. Couldn't get this to work.
// Route::view('edit_form', 'edit_form')->name('form.update')->middleware('signed');
// Route::get('update', [UpdateContact::class, 'update'])->name('form.update')->middleware('signed');
// Route::post('update', [UpdateContact::class, 'update'])->name('form.update')->middleware('signed');

