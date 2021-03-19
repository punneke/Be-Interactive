<?php

use \Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
Route::get('contact-us', [ContactController::class, 'getContact']);
Route::post('contact-us', [ContactController::class, 'saveContact']);

//Routes voor Edit/update
Route::get('edit_form', [ContactController::class, 'edit_form'])->name('form.edit')->middleware('signed');
Route::post('edit_form', [ContactController::class, 'update'])->name('form.update')->middleware('signed');


// Route::get('/application-form/{form}/edit', [FormController::class, 'edit'])->name('form.edit')->middleware('signed');
// Route::post('/application-form/{form}', [FormController::class, 'update'])->name('form.update')->middleware('signed');