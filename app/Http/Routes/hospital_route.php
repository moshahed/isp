<?php

Route::resource('hospital-bed-type', 'BedTypeController');

Route::resource('hospital-bed-no', 'BedNoController');

Route::resource('patient-admission', 'PatientAdmissionController');

Route::resource('hospital-bill-generate', 'BillGenerateController');