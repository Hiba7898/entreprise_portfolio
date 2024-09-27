<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/forsoft', function () {
    return view('forsoft');
})->name('forsoft');

Route::get('/Qui_Somme_Nous', function () {
    return view('Qui_Somme_Nous');
})->name('Qui_Somme_Nous');

Route::get('/contact', function () {  
    return view('contact')
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/Référence', function () { 
    return view('reference');
})->name('reference');

Route::get('/solution-MICROSOFT', function () {
    return view('solution-MICROSOFT');
})->name('solution-MICROSOFT');

Route::post('/sendEmail',[ContactController::class,'sendEmail'])->name('sendEmail');



