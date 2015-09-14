<?php namespace App\Http\Controllers\Isp;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Isp\SecondaryPops;
use App\Models\Isp\MainPops;

class SecondaryPopsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(SecondaryPops $model)
	{       
                $data['secondary_pop_list']=$model->all();
		return View('isp-secondary-pop.secondary-pop-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(SecondaryPops $model)
	{
		$data['main_pop'] = MainPops::lists('name','id');
                return View('isp-secondary-pop.create-secondary-pop',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SecondaryPops $model, Request $request)
	{
		 $name = $request->input('name');
            $duplicate = $model::where('name', '=', $name)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Secondary POP !';
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(SecondaryPops $model)
	{
            $data['secondary_pop']=$model;
		$data['main_pop'] = MainPops::lists('name','id');
                return View('isp-secondary-pop.secondary-pop-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SecondaryPops $model, Request $request)
	{
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
