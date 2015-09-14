<?php namespace App\Http\Controllers\Isp;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Isp\MainPops;

class MainPopsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(MainPops $model)
	{
                $data['main_pop_list']=$model->all();
		return View('isp-main-pop.main-pop-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('isp-main-pop.create-main-pop');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MainPops $model, Request $request)
	{
		 $name = $request->input('name');
            $duplicate = $model::where('name', '=', $name)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Main POP !';
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
	public function edit(MainPops $model)
	{
		$data['pop_info'] = $model;
		return view('isp-main-pop.main-pop-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(MainPops $model, Request $request)
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
