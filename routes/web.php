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

Route::get('admin', function () {
  return view('admin_template');
});

Route::get('list', function () {
  return view('list');
});

Route::get('input', function () {
  return view('input');
});

Route::get('list', 'DataController@index');
Route::get('input/add','FormController@add');

Route::get('data', 'DataController@index');
Route::get('data/export_excel', 'DataController@export_excel');

Route::get('export', 'ExportController@index');
Route::get('export/export_excel', 'ExportController@export_excel');
