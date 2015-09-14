<?php namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Registration\DoctorRegistrationRequest;

use App\Models\Registration\Doctor;

class DoctorRegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Doctor $model)
	{
		$data['doctor_list'] = $model->all();

		return view('registration.doctor.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$data['title'] = [ 'Dr.' => 'Dr.', 'Prof.' => 'Prof.'];
		$data['chamber'] = [ 'No' => 'No', 'Yes' => 'Yes'];

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration.doctor.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Doctor $model, DoctorRegistrationRequest $request)
	{
		return $model->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Doctor $model)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Doctor $model)
	{
		$data['doctor_info'] = $model;
		$data['title'] = [ 'Dr.' => 'Dr.', 'Prof.' => 'Prof.'];
		$data['chamber'] = [ 'No' => 'No', 'Yes' => 'Yes'];

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration.doctor.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Doctor $model, DoctorRegistrationRequest $request)
	{
		$model->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
