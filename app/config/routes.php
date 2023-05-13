// app/config/routes.php

<?php

Route::get('/', 'HomeController@index');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@register');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/code', 'AdminController@code');
Route::post('/admin/code', 'AdminController@uploadCode');
Route::get('/admin/code/preview', 'AdminController@codePreview');

?>
