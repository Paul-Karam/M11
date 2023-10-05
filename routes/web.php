<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

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
    return view('layouts/app');
});

Route::get('/our-story', function () {
    return view('pages/our-story');
});

Route::get('/users-page', function () {
    return view('pages/users-page');
});

Route::get('/profile-page', function () {
    return view('pages/profile-page');
});

Route::get('/login', function () {
    return view('pages/login-page');
});

Route::get('/verification', function () {
    return view('pages/verification');
});

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/buy-rent', function () {
    return view('pages/buy-rent');
});

Route::get('/compare', function () {
    return view('pages/compare');
});

Route::get('/property-details', function () {
    return view('pages/property-details');
});

Route::get('/chat', function () {
    return view('pages/chat');
});

Route::get('/account', function () {
    return view('pages/account');
});

Route::get('/details', function () {
    return view('pages/acc-details');
});
Route::get('/contacted-properties', function () {
    return view('pages/acc-contacted-props');
});
Route::get('/saved-properties', function () {
    return view('pages/acc-saved-props');
});
Route::get('/viewing-history', function () {
    return view('pages/acc-viewing-history');
});
Route::get('/my-likes', function () {
    return view('pages/acc-my-likes');
});
Route::get('/saved-posts', function () {
    return view('pages/acc-saved-posts');
});
Route::get('/saved-properties', function () {
    return view('pages/acc-saved-props');
});

Route::get('/faqs', function () {
    return view('pages/faqs');
});

Route::get('/contact-us', function () {
    return view('pages/contact-us');
});

Route::get('/media-center', function () {
    return view('pages/media-center');
});

Route::get('/media-article', function () {
    return view('pages/media-article');
});

Route::get('/start-selling', function () {
    return view('pages/start-selling');
});

Route::get('/agent-login', function () {
    return view('pages/agent-login');
});

Route::get('/become-agent', function () {
    return view('pages/become-an-agent');
});

Route::get('/agent-dashboard', function () {
    return view('pages/agent-dashboard');
});

Route::get('/edit-profile', function () {
    return view('pages/edit-profile');
});

Route::get('/my-listings', function () {
    return view('pages/my-listings');
});

Route::get('/single-property', function () {
    return view('pages/single-property');
});

Route::get('/property-reports', function () {
    return view('pages/property-reports');
});

Route::get('/add-new-property', function () {
    return view('pages/add-new-property');
});

Route::get('/visitors-analytics', function () {
    return view('pages/visitors-analytics');
});