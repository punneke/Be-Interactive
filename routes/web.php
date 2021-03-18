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

Route::post('/contact', function(Request $request) {
    Mail::send(new ContactMail($request));
    return redirect('/'); 
});