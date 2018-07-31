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

Route::get('/SLC/constitution', function () {
    return view('other.constitution');
})->name('constitution');

Route::get('/SLC/members', function () {
    return view('other.members');
})->name('members');



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


// Route::get('/SLC/about', function () {
//     return view('other.about');
// })->name('about');


Route::get('/SLC/admin', 'AdminController@index')->name('admin');

// Auth::routes();

Route::get('/SLC/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/SLC/login', 'Auth\LoginController@login');
Route::get('/SLC/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('/SLC/register', 'Auth\AuthController@showRegistrationForm')->name('register');
// Route::post('/SLC/register', 'Auth\AuthController@register');

// Password Reset Routes...
// Route::get('/SLC/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('/SLC/password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('/SLC/password/reset', 'Auth\PasswordController@reset');

// Route::get('/SLC/home', 'HomeController@index')->name('home');

// Route::post('/SLC/doc/add', 'AdminController@doc_add')->name('doc.add');
// Route::put('/SLC/doc/{$id}/edit/', 'AdminController@doc_udpate')->name('doc.edit');
// Route::delete('/SLC/doc/{$id}', 'AdminController@doc_delete')->name('doc.delete');

Route::resource('/SLC/doc', 'DocumentsController', 
[   'only' => ['store', 'update', 'destroy'],
    'names' => [
        // 'index'     => 'doc.index',
        // 'create'    => 'doc.create',
        'store'     => 'doc.store',
        // 'show'      => 'doc.show',
        // 'edit'      => 'doc.edit',
        'update'    => 'doc.update',
        'destroy'   => 'doc.destroy'
    ]
]);

Route::resource('/SLC/mem', 'MembersController', 
[   'only' => ['store', 'update', 'destroy'],
    'names' => [
        // 'index'     => 'mem.index',
        // 'create'    => 'mem.create',
        'store'     => 'mem.store',
        // 'show'      => 'mem.show',
        // 'edit'      => 'mem.edit',
        'update'    => 'mem.update',
        'destroy'   => 'mem.destroy'
    ]
]);
