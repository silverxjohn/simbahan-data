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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/church', 'ChurchPageController@churches')->name('church-list');

Route::get('/church/mass-schedule', 'ChurchPageController@massSchedule')->name('church-mass-schedule');

Route::get('/church/confession-schedule', 'ChurchPageController@confessionSchedule')->name('church-confession-schedule');

Route::get('/church/announcement', 'ChurchPageController@announcements')->name('church-announcement');



Route::get('/organization/announcement', 'OrganizationPageController@announcements')->name('organization-announcement');

Route::get('/organization/mass-schedule', 'OrganizationPageController@massSchedule')->name('organization-mass-schedule');

Route::get('/organization/worship-schedule', 'OrganizationPageController@worshipSchedule')->name('organization-worship-schedule');

Route::get('/organization/bible-schedule', 'OrganizationPageController@bibleSchedule')->name('organization-bible-schedule');



Route::resource('churches', 'ChurchController');

Route::resource('organizations', 'OrganizationController');

Route::resource('churches/{church}/announcements', 'ChurchAnnouncementController');

Route::resource('churches/{church}/mass-details', 'MassDetailController');

Route::resource('churches/{church}/confession-details', 'ConfessionDetailController');



Route::resource('organizations/{organization}/announcements', 'OrganizationAnnouncementController');

Route::resource('organizations/{organization}/mass-details', 'OrgMassDetailController');

Route::resource('organizations/{organization}/worship-details', 'OrgWorshipDetailController');

Route::resource('organizations/{organization}/bible-details', 'OrgBibleDetailController');