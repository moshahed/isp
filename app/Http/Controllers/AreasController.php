<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin\CompanyInfo;
use App\Areas;
use App\AreaGroups;

class AreasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Areas $model)
	{
		$data['area_group_list']=$model->all();
                return View('isp-area.area-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Areas $model)
	{
            $data['area_group'] = AreaGroups::lists('name','id');
            return View('isp-area.create-area',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Areas $model, Request $request)
	{
		return $model->create($request->all());
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
	public function edit(Areas $model)
	{
		$data['area_info'] = $model;

		$data['area_group'] = AreaGroups::lists('name','id');

		return view('isp-area.area-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Areas $model, Request $request)
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
