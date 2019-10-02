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


//Route::get('/physical', 'AbusesController@ShowPhysicalAbuse')->name('physical.add');
//Route::get('/domestic', 'AbusesController@ShowDomesticAbuse')->name('domestics.add');
Route::get('/sexual', 'AbusesController@ShowSexualAbuse')->name('sexuals.add');
//Route::get('/psychological', 'AbusesController@ShowPsychologicalAbuse')->name('psychological.add');
//Route::get('/discriminatory','AbusesController@ShowDiscriminatorylAbuse')->name('discriminatorys.add');
//Route::get('/organisational', 'AbusesController@ShowOrganisationalAbuse')->name('organisational.add');
//Route::get('/neglect', 'AbusesController@ShowNeglectAbuse')->name('neglects.add');
Route::post('/add', 'AbusesController@AddAbuses')->name('abuses.save');
Route::get('/reports', 'AbusesController@showReports')->name('reports');
//Route::get('/abuses','AbusesController@showAbuses')->name('abuses.add');
//Route::get('/reports/details', 'ReportController@showDetails')->name('reports.details');
Route::get('/add-referrer', 'PoliceController@showMedicalReferrerForm')->name('referrer.add');
Route::post('/referrer', 'PoliceController@addReferrer')->name('referrer.save');
Route::get('/referrer/edit/{id}', 'PoliceController@EditReferrer')->name('referrer.edit');
Route::put('/referrer/update/{id}', 'PoliceController@UpdateReferrer')->name('referrer.update');
Route::get('/referrer-reports', 'PoliceController@showReferrer')->name('referrer.reports');
Route::get('/add-interview', 'PoliceController@showInterviewForm')->name('interview.add');
Route::post('/interview', 'PoliceController@addInterview')->name('interview.save');
Route::get('/interview-reports', 'PoliceController@showInterview')->name('interview.reports');

