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
    return view('welcome');
});
Route::get('/dashboard','DashboardController@profile')->name('dashboard.profile');
Route::get('/dashboard/untung','DashboardController@untung')->name('dashboard.untung');
Route::get('/dashboard/untung/manfaat','DashboardController@manfaat')->name('dashboard.manfaat');
Route::get('/dashboard/rugi','DashboardController@rugi')->name('dashboard.rugi');
Route::get('/dashboard/rugi/kerugian','DashboardController@kerugian')->name('dashboard.kerugian');
Route::get('/dashboard/eer', 'DashboardController@eer')->name('dashboard.eer');
Route::get('/dashboard/eer/materi', 'DashboardController@materi')->name('dashboard.materi');
Route::get('/dashboard/eer/material', 'DashboardController@material')->name('dashboard.material');
Route::get('/dashboard/sqlserver', 'DashboardController@sqlserver')->name('dashboard.sqlserver');
Route::get('/dashboard/sqlserver/materi', 'DashboardController@materisql')->name('dashboard.materisql');
Route::get('/dashboard/sqlserver/detailsql', 'DashboardController@sqldetail')->name('dashboard.sqldetail');
Route::get('/dashboard/distribusi', 'DashboardController@distribusi')->name('dashboard.distribusi');
Route::get('/dashboard/distribusi/materi', 'DashboardController@distribusimateri')->name('dashboard.distribusimateri');
Route::get('/dashboard/distribusi/table1', 'DashboardController@tableone')->name('dashboard.tableone');
Route::get('/dashboard/distribusi/table2', 'DashboardController@tabletwo')->name('dashboard.tabletwo');
Route::get('/dashboard/distribusi/detail', 'DashboardController@distribusidetail')->name('dashboard.distribusidetail');
Route::get('/dashboard/keamanan', 'DashboardController@keamanandb')->name('dashboard.keamanandb');
Route::get('/dashboard/keamananmateri', 'DashboardController@keamananmateridb')->name('dashboard.keamananmateridb');
Route::get('/dashboard/keamananmateri/salahguna', 'DashboardController@salahguna')->name('dashboard.salahguna');
Route::get('/dashboard/keamananmateri/teknik', 'DashboardController@teknik')->name('dashboard.teknik');
Route::get('/dashboard/keamananmateri-detail', 'DashboardController@keamanandetail')->name('dashboard.keamanandetail');
Route::get('/dashboard/presentasi', 'DashboardController@hasilpresentasi')->name('dashboard.hasilpresentasi');
Route::get('/dashboard/presentasi/workflow', 'DashboardController@presentasiworkflow')->name('dashboard.workflow');
Route::get('/dashboard/presentasi/erd', 'DashboardController@presentasierd')->name('dashboard.presentasierd');
Route::get('/dashboard/presentasi/database', 'DashboardController@presentasidatabase')->name('dashboard.presentasidatabase');
Route::get('/dashboard/presentasi/materi', 'DashboardController@materipresentasi')->name('dashboard.materipresentasi');
Route::get('/dashboard/presentasi/detail', 'DashboardController@detailpresentasi')->name('dashboard.detailpresentasi');




