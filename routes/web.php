<?php

use App\Models\Blogs;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::view('/about_us', 'About.about');
Route::view('/contact_us', 'Contact.contact');
Route::resource('/blogs', \App\Http\Controllers\BlogsController::class);


Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [App\Http\Controllers\FrontController::class, 'dashboard']);
Route::resource('/scholarship', \App\Http\Controllers\ScholarshipController::class);
Route::resource('/job', \App\Http\Controllers\JobController::class);

Route::get('/site/blogs', [App\Http\Controllers\FrontController::class, 'site_blogs']);
Route::get('/show_blog/{id}', [App\Http\Controllers\FrontController::class, 'show_blog']);
Route::get('/site/jobs', [App\Http\Controllers\FrontController::class, 'site_jobs']);
Route::get('/show_job/{id}', [App\Http\Controllers\FrontController::class, 'show_job']);
Route::get('/site/scholarships', [App\Http\Controllers\FrontController::class, 'site_scholarships']);
Route::get('/show_scholarship/{id}', [App\Http\Controllers\FrontController::class, 'show_scholarship']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'index']);
});
