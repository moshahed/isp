<?php

Route::resource('investigation-trn', 'InvestigationTrnController');

Route::get('investigation-trn/{patient_id}/search','InvestigationTrnController@search');