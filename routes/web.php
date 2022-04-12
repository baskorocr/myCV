<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\Home::class,'index'])->name('home');
Route::get('about', [App\Http\Controllers\About::class,'index'])->name('abouts');
Route::get('resume', [App\Http\Controllers\Resume::class,'index'])->name('resumes');
Route::get('skill', [App\Http\Controllers\Skill::class,'index'])->name('skills');
Route::get('portolio', [App\Http\Controllers\Portofolio::class,'index'])->name('portofolios');
Route::get('contact', [App\Http\Controllers\Contact::class,'index'])->name('contacts');
Route::post('contact', [App\Http\Controllers\Contact::class,'sendMail']);
