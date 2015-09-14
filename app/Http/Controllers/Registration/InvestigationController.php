<?php namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Models\Registration\InvestigationGroup;

use App\Http\Requests\Registration\InvestigationRequest;

use App\Models\Registration\Investigation;

class InvestigationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( Investigation $model )
	{
		$data['investigation_list'] = $model->all();

		return view('registration.investigation.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['investigation_group_list'] = InvestigationGroup::lists('group_name','id');

		return view('registration.investigation.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Investigation $model, InvestigationRequest $request)
	{
		return $model->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show( Investigation $model )
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Investigation $model)
	{
		$data['investigation_info'] = $model;
		$data['investigation_group_list'] = InvestigationGroup::lists('group_name','id');

		return view('registration.investigation.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Investigation $model, InvestigationRequest $request)
	{
		$model->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy( Investigation $model )
	{
		//
	}

}
