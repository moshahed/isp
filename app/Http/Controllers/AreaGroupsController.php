<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CompanyInfo;
use App\AreaGroups;
//use App\Http\Controllers\AreaGroups;

class AreaGroupsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(AreaGroups $model)
	{
           
		$data['group_all']=$model->all();
                return View('isp-area-group.area-group-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
             
            return View('isp-area-group.create-area-group');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AreaGroups $model, Request $request)
	{
            $main_pop = $request->input('main_pop');
            $duplicate = $model::where('main_pop', '=', $main_pop)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Client Type !';
            }          
		$model->create($request->all());
            return 'true';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'Show';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(AreaGroups $model)
	{
		$data['group_info']=$model;
                return View('isp-area-group.area-group-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(AreaGroups $model, Request $request)
	{
             $main_pop = $request->input('main_pop');
            $duplicate = $model::where('main_pop', '=', $main_pop)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Client Type !';
            }            
		$model->update($request->all());
            return 'true';
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
