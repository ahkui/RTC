<?php

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
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('rtc.home')->with(['title'=>'Home'])->render(),
            'title'=>'Home'
        ]);
    return view('rtc.home')->with(['title'=>'home']);
})->name('rtc.home');

Route::get('about', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('rtc.about')->with(['title'=>'about'])->render(),
            'title'=>'about'
        ]);
    return view('rtc.about')->with(['title'=>'about']);
})->name('rtc.about');

Route::get('/portfolio', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('rtc.portfolio')->with(['title'=>'portfolio'])->render(),
            'title'=>'portfolio'
        ]);
    return view('rtc.portfolio')->with(['title'=>'portfolio']);
})->name('rtc.portfolio');

Route::get('/contact', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('rtc.contact')->with(['title'=>'contact'])->render(),
            'title'=>'contact',
            'run'=>'contact_me'
        ]);
    return view('rtc.contact')->with(['title'=>'contact']);
})->name('rtc.contact');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::domain('club.ahkui.com')->group(function () {

});
Route::get('/club', function () {
    return view('iosclub.home')->with(['title'=>'iosclub']);
})->name('iosclub.home');