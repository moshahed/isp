<?php namespace App\Http\Controllers\Hospital;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hospital\BedTypeRequest;
use App\Models\Hospital\BedType;
use Illuminate\Http\Request;

class BedTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['bed_type_list'] = BedType::all();

		return view('hospital/bed_type/list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('hospital/bed_type/create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BedType $obj, BedTypeRequest $request)
	{
		 return $obj->create($request->all());
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
	public function edit(BedType $obj)
	{
		$data['bed_type_info'] = $obj;

		return view('hospital/bed_type/edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(BedType $obj, BedTypeRequest $request)
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
