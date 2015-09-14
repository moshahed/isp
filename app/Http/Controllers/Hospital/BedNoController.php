<?php namespace App\Http\Controllers\Hospital;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Hospital\BedNo;
use App\Models\Hospital\BedType;
use Illuminate\Http\Request;
use App\Http\Requests\Hospital\BedNoRequest;

class BedNoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( BedNo $model)
	{
		$data['bed_no_list'] = $model->all();

		return view('hospital.bed_no.list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['bed_type_list'] = ['Select Bed Type'] + BedType::lists('name','id');

		return view('hospital.bed_no.create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BedNoRequest $request)
	{
		BedNo::create($request->all());
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
	public function edit(BedNo $model)
	{
		$data['bed_no_info'] = $model;

		$data['bed_type_list'] = BedType::lists('name','id');

		return view('hospital.bed_no.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(BedNo $obj, BedNoRequest $request)
	{
		$obj->update($request->all());
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
