<?php namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\Hospital\PatientAdmission;

class BillGenerateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$admitted_patients = PatientAdmission::with('patientInfo','bedInfo')->get();

		$admitted_patients_list = [];
		foreach($admitted_patients as $value){
			$admitted_patients_list[$value->id] = $value->id . ' - ' . $value->patientInfo->patient_name . ' - ' . $value->bedInfo->name;
		}

		$data['admitted_list'] = ['Select Patient'] + $admitted_patients_list;

		return view('hospital.bill_generate.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		return $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
