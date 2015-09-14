<?php namespace App\Http\Controllers\Isp;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CompanyInfo;
use App\Models\Isp\Packages;
class PackagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Packages $model)
	{
                       
		$data['packages_list']=$model->all();
                return View('isp-packages.packages-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('isp-packages.create-package');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Packages $model, Request $request)
	{
            $name = $request->input('name');
            $duplicate = $model::where('name', '=', $name)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Package Name !';
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
	public function show(Packages $model)
	{
		$data['package_info'] = $model;
		$data['company_info'] = CompanyInfo::find(1);
		return view('isp-packages.package-report',$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Packages $model)	{
		$data['package_info'] = $model;
		return view('isp-packages.packages-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Packages $model, Request $request)
	{
		$model->update($request->all()); $name = $request->input('name');
            $duplicate = $model::where('name', '=', $name)->first();
            if (!empty($duplicate)) {
                return 'Already Exists Package Name !';
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
