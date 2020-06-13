<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BerandaController@index');
Route::get('/beranda', 'BerandaController@index');
Route::get('/beranda/login', 'BerandaController@login');
Route::post('/beranda/cek_login', 'BerandaController@cek_login');
Route::post('/beranda/proses_simpan', 'BerandaController@proses_simpan');
Route::get('/beranda/logout', 'BerandaController@logout');
Route::get('/beranda/register', 'BerandaController@register');
Route::get('/beranda/verifemail/{id_pengguna}', 'BerandaController@verifemail');

Route::get('/user', 'UserController@home');
Route::get('/user/tambah_user', 'UserController@tambah_user');
Route::post('/user/proses_simpan', 'UserController@proses_simpan');
Route::get('/user/edit/{id_pengguna}', 'UserController@edit');
Route::put('/user/update_proses/{id_pengguna}', 'UserController@update_proses');
Route::get('/user/hapus_user/{id_pengguna}', 'UserController@hapus_user');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/login_new_user', 'AdminController@login_new_user');
Route::get('/admin/register_user', 'AdminController@register_user');
Route::post('/admin/simpan_user', 'AdminController@simpan_user');
Route::get('/admin/data_scrape', 'AdminController@data_scrape');
Route::get('/admin/add_data_scrape', 'AdminController@add_data_scrape');
Route::post('/admin/proses_simpan_data_scrape', 'AdminController@proses_simpan_data_scrape');
Route::get('/admin/edit_scrape/{id_data_scrape}', 'AdminController@edit_scrape');
Route::put('/admin/update_proses_data_scrape/{id_data_scrape}', 'AdminController@update_proses_data_scrape');
Route::get('/admin/hapus_scrape/{id_data_scrape}', 'AdminController@hapus_scrape');
Route::post('/admin/cek_login', 'AdminController@cek_login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/logout', 'AdminController@logout');
Route::post('/admin/simpan_user', 'AdminController@simpan_user');


Route::get('/beranda/kirimemail','BerandaController@kirimemail');

