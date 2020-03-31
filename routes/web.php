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

//ROUTES ALUNOS

Route::get('/cadeira', 'StudentController@cadeira');

Route::get('/grupos', 'StudentController@grupos');

Route::get('/horario', 'StudentController@horario');

Route::get('/news', 'StudentController@news');

//ROUTES LOGIN

Route::get('/login', 'LoginController@index');

//ROUTES PROFESSORES

Route::get('/projeto_prof', 'ProfessorController@index');

//ROUTES ADMIN

Route::get('/admin/', 'AdminController@index');

Route::get('/admin/login', 'AdminController@login');

Route::get('/admin/tables', 'AdminController@tables');


//--------------------------------------------EASTER EGG FRAZAO--------------------------------------------------------
Route::get('/welcome', function () {
    return view('welcome');
});
//---------------------------------------------------------------------------------------------------------------------

//PAGES ROUTES

Route::get('/', 'PagesController@index');

Route::get('/profile', 'PagesController@profile');



Route::get('/dashboardProf', function () {
    return view('dashboardProf');
});

Route::get('/modal', function () {
    return view('modal');
});



