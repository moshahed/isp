<?php namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Registration\BrokerRegistrationRequest;

use App\Models\Registration\Broker;

use App\Models\Admin\CompanyInfo;

class BrokerRegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Broker $model)
	{
		$data['broker_list'] = $model->all();

		return view('registration.broker.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registration.broker.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Broker $model, BrokerRegistrationRequest $request)
	{
		return $model->create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Broker $model)
	{
		$data['list'] = $model;
		$data['company_info'] = CompanyInfo::find(1);

		return view('registration.broker.report',$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Broker $model)
	{
		$data['broker_info'] = $model;

		return view('registration.broker.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Broker $model, BrokerRegistrationRequest $request)
	{
		$model->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Broker $model)
	{
		//
	}

}
