<?php

use App\Models\Contact;
use App\Mail\contactUsMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', [contactUsController::class, 'index']);
// Route::get('/send', function(){
//     $contact = Contact;
//     Mail::to('dina@gulfrange.com')->send(new contactUsMail($contact));
//     return response('Sent');
// });
Route::post('/contact-us', [contactUsController::class, 'store'])->name('contact.us.store');