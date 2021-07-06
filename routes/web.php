<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
// use App\Http\Controllers\Auth\LoginController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogleCallback']);

//Facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebookCallback']);

//Github
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithubCallback']);

// //Google
// Route::get('/login/google', function () {
//     return Socialite::driver('google')->redirect();
// })->name('login.google');

// Route::get('/login/google/callback', function () {
//     $user = Socialite::driver('google')->user();

//     // $user->token
// });

// //Facebook
// Route::get('/login/facebook', function () {
//     return Socialite::driver('facebook')->redirect();
// })->name('login.facebook');

// Route::get('/login/facebook/callback', function () {
//     $user = Socialite::driver('facebook')->user();

//     // $user->token
// });

// //Github
// Route::get('/login/github', function () {
//     return Socialite::driver('github')->redirect();
// })->name('login.github');

// Route::get('/login/github/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });
