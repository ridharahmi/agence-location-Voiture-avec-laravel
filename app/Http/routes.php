<?php




Route::auth();

Route::get('/', 'HomeController@index');
Route::post('SearchVoiture', 'HomeController@SearchVoiture');
Route::get('/home', 'Auth\RoleController@index');
Route::match(['get', 'post'],'Contact', 'HomeController@contact');

Route::get('/Admin', 'Admin\AdminController@index');
Route::match(['get', 'post'],'/Setting', 'Admin\AdminController@setting');
Route::match(['get', 'post'],'/Password', 'Admin\AdminController@password');
Route::resource('GestionContact', 'Admin\ContactController');
Route::resource('GestionVoiture', 'Admin\VoitureController');
Route::resource('GestionClient', 'Admin\ClientController');

Route::get('/Client', 'Client\ClientController@index');
Route::match(['get', 'post'],'/SettingClient', 'Client\ClientController@setting');
Route::match(['get', 'post'],'/PasswordClient', 'Client\ClientController@password');
Route::resource('ListDemande', 'Client\DemandeController');
Route::resource('ListVoiture', 'Client\VoitureController');