<?php namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Models\Registration\Patient;

use App\Http\Requests\Registration\PatientRegistrationRequest;

use App\Models\Admin\CompanyInfo;

use App\Models\Admin\BloodGroup;


class PatientRegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Patient $model)
	{
		$data['patient_list'] = $model->all();

		return view('registration.patient.list',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['blood_group'] = BloodGroup::lists('group_name','id');

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration.patient.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Patient $model, PatientRegistrationRequest $request)
	{
		return $model->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Patient $model)
	{
		$data['patient_info'] = $model;
		$data['company_info'] = CompanyInfo::find(1);

		return view('registration.patient.report',$data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Patient $model)
	{
		$data['patient_info'] = $model;

		$data['blood_group'] = BloodGroup::lists('group_name','id');

		return view('registration.patient.edit',$data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Patient $model, PatientRegistrationRequest $request)
	{
		$model->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy( Patient $model )
	{
		//
	}

	/**
	 * search
	 */
	public function search( Patient $model )
	{
		return $model;
	}


}
