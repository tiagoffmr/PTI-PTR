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
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/students', function () {
    return view('admin.students');
});

Route::get('/admin/professors', function () {
    return view('admin.professors');
});

Route::get('/admin/subjects', function () {
    return view('admin.subjects');
});

Route::get('/admin/classes', function () {
    return view('admin.classes');
});

Route::get('/admin/import_data', function () {
    return view('admin.import_data');
});

Route::get('/admin/permissions', function () {
    return view('admin.permissions');
});