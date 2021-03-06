<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

// ===============================================
// STATIC PAGES ==================================
// ===============================================
// show a static view for the home page (app/views/home.blade.php)
Route::get('/', array('as' => 'home', function() {
        return View::make('pages.home');
    }));

// about page (app/views/about.blade.php)
Route::get('about', array('as' => 'about', function() {
        return View::make('pages.about');
    }));

// ===============================================
// Dynamic Resources =============================
// ===============================================
Route::resource('servers', 'ServerController');
Route::resource('websites', 'WebsiteController');

// ===============================================
// LOGIN SECTION =================================
// ===============================================
// show the login page
Route::get('login', array('uses' => 'HomeController@showLogin'));

// process the login
Route::post('login', array('uses' => 'HomeController@doLogin'));

// process a logout request
Route::post('logout', array('uses' => 'HomeController@doLogout'));

// ===============================================
// ADMIN SECTION =================================
// ===============================================
//Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
//    // main page for the admin section (app/views/admin/dashboard.blade.php)
//    Route::get('/', function() {
//        return View::make('admin.dashboard');
//    });
//
//    // subpage for the websites found at /admin/websites (app/views/admin/websites.blade.php)
//    Route::get('websites', function() {
//        return View::make('admin.websites');
//    });
//
//    // subpage to create a website found at /admin/websites/create (app/views/admin/websites-create.blade.php)
//    Route::get('websites/create', function() {
//        return View::make('admin.websites-create');
//    });
//
//    Route::post('websites/create', function() {
//        // add the website to the database
//        //$website = new Website;
//        //$website->name = Input::get('name');
//        // more stuff here
//        // $website->save();
//        // create a success message
//        Session::flash('message', 'Successfully created website');
//
//        // redirect
//        return Redirect::to('admin/websites');
//    });
//});

// ===============================================
// 404 ===========================================
// ===============================================

App::missing(function($exception) {

    // shows an error page (app/views/error.blade.php)
    // returns a page not found error
    return Response::view('error', array(), 404);
});
