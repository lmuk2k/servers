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
Route::get('/', function() {
    return View::make('home');
});

// about page (app/views/about.blade.php)
Route::get('about', array('as' => 'about', function() {
        return View::make('about');
    }));

Route::get('websites', function() {
    $websites = Website::all();

    return View::make('websites')->with('websites', $websites);
});