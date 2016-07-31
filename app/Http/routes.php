<?php

Route::get('/', 'PageController@zipform');
Route::post('subcategories/{id}', 'PageController@subcategories');
// Route::post('setzip', 'PageController@setZip');