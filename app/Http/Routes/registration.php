<?php

Route::resource('register-patient', 'PatientRegistrationController');
Route::get('register-patient/{register_patient}/search', 'PatientRegistrationController@search');


Route::resource('register-doctor', 'DoctorRegistrationController');

Route::resource('register-broker', 'BrokerRegistrationController');

Route::resource('register-investigation-group', 'InvestigationGroupController');

Route::resource('register-investigation', 'InvestigationController');
