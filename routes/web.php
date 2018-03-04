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

Route::get('/SLC/', function () {
    return view('index');
})->name('index');

Route::resource('/SLC/blog', 'BlogController', 
[
    'names' => [
        'index'     => 'blog.index',
        'create'    => 'blog.create',
        'store'     => 'blog.store',
        'show'      => 'blog.show',
        'edit'      => 'blog.edit',
        'update'    => 'blog.update',
        'destroy'   => 'blog.destroy'
    ]
]);

// 
Route::get('/SLC/constitution', function () {
    return view('other.constitution');
})->name('constitution');

Route::get('/SLC/documents', function () {
    return view('other.documents');
})->name('documents');


Route::get('/SLC/minutes', function () {
    return view('other.minutes');
})->name('minutes');

Route::get('/SLC/finances', function () {
    return view('other.finances');
})->name('finances');


Route::get('/SLC/gallery', function () {
    return view('other.gallery');
})->name('gallery');
// 


Route::get('/SLC/contact', function () {
    return view('other.contact');
})->name('contact');


Route::get('/SLC/about', function () {
    return view('other.about');
})->name('about');


Route::get('/admin', function() {
    return view('admin.home');
})->name('admin');