<?php namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use App\Http\Requests\Registration\InvestigationGroupRequest;

use App\Models\Registration\InvestigationGroup;


class InvestigationGroupController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( InvestigationGroup $model)
	{
		$data['investigation_group_list'] = $model->all();

		return view('registration.investigation_group.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registration.investigation_group.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(InvestigationGroupRequest $request)
	{
		return InvestigationGroup::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(InvestigationGroup $obj)
	{
		$data['investigation_group_info'] = $obj;

		return view('registration.investigation_group.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( InvestigationGroup $model, InvestigationGroupRequest $request )
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
