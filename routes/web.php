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

//Routes voor Contactform
Route::get('sign_up', [ContactController::class, 'getContact']);
Route::post('sign_up', [ContactController::class, 'saveContact']);



//Zonder Signed Route:
Route::view('edit_form', 'edit_form');
Route::post('update', [UpdateContact::class, 'update']);

//Met Signed Route:
// Route::view('edit_form', 'edit_form')->name('form.edit')->middleware('signed');
// Route::post('update', [UpdateContact::class, 'update'])->name('form.update')->middleware('signed');




//Oud zooi:

// Route::get('/application-form/{form}/edit', [FormController::class, 'edit'])->name('form.edit')->middleware('signed');
// Route::post('/application-form/{form}', [FormController::class, 'update'])->name('form.update')->middleware('signed');

//Routes voor Edit/update
// Route::get('edit_form', [UpdateContact::class, 'edit_form'])->name('form.edit')->middleware('signed');
// Route::post('edit_form', [UpdateContact::class, 'update'])->name('form.update')->middleware('signed');