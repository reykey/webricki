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

Route::get('/', 'ControllerIsi@index');
Route::get('/portfolio-brixnara','ControllerIsi@brixnara');
Route::get('/portfolio-ninaxsatya','ControllerIsi@ninaxsatya');
Route::get('/portfolio-freyshaxnanda','ControllerIsi@freyshaxnanda');
// Route::get('project', 'ControllerIsi@project');
// Route::get('project/{id_project}', 'ControllerCatalog@index');
