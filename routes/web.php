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
    return view('index');
})->name('index');

Route::get('/constitution', function () {
    return view('other.constitution');
})->name('constitution');

Route::get('/members', function () {
    return view('other.members');
})->name('members');



Route::resource('/blog', 'BlogController', 
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
Route::get('/documents', function () {
    return view('other.documents');
})->name('documents');


Route::get('/minutes', function () {
    return view('other.minutes');
})->name('minutes');

Route::get('/finances', function () {
    return view('other.finances');
})->name('finances');


Route::get('/gallery', function () {
    return view('other.gallery');
})->name('gallery');
// 


Route::get('/contact', function () {
    return view('other.contact');
})->name('contact');


// Route::get('/about', function () {
//     return view('other.about');
// })->name('about');


Route::get('/admin', 'AdminController@index')->name('admin');

// Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('/register', 'Auth\AuthController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\AuthController@register');

// Password Reset Routes...
// Route::get('/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('/password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('/password/reset', 'Auth\PasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/doc/add', 'AdminController@doc_add')->name('doc.add');
// Route::put('/doc/{$id}/edit/', 'AdminController@doc_udpate')->name('doc.edit');
// Route::delete('/doc/{$id}', 'AdminController@doc_delete')->name('doc.delete');

Route::resource('/doc', 'DocumentsController', 
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

Route::resource('/mem', 'MembersController', 
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
