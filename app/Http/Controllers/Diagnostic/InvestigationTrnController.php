<?php namespace App\Http\Controllers\Diagnostic;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegistrationModel\Brokers;
use App\RegistrationModel\Doctors;
use App\RegistrationModel\Investigation;
use App\RegistrationModel\InvestigationGroup;
use App\RegistrationModel\PatientRegistration;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InvestigationTrnController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['group_name'] = InvestigationGroup::lists('group_name','id');

		$data['dr_list'] = Doctors::lists('name','id');

		$data['rf_list'] = Brokers::lists('name','id');

		$data['dr_speciality'] = Doctors::select('speciality','id')->get()->toJson();

		return view('diagnostic/investigation/investigation_ticket',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

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
		return Investigation::where('group_id',$id)->get()->toJson();

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

	public function search($id)
	{
		return PatientRegistration::find($id)->toJson();
	}

}
