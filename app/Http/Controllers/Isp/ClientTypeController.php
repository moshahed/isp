<?php namespace App\Http\Controllers\Isp;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Clienttype\ClienttypeRequest;
use Illuminate\Http\Request;
use App\Models\Admin\CompanyInfo;
use App\Models\Isp\ClientTypes;
class ClientTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(ClientTypes $model)
	{
               $data['client_list']=$model->all();
		return View('isp-client-type.client-list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('isp-client-type.create-client-type');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClientTypes $model, Request $request)
        {

            $name = $request->input('name');
            $duplicate = ClientTypes::where('name', '=', $name)->first();

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
	public function show(ClientTypes $model)
	{
		$data['client_info'] = $model;
		$data['company_info'] = CompanyInfo::find(1);
		return view('isp-client-type.client-type-report',$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(ClientTypes $model)
	{
		$data['client_info'] = $model;

//		$data['client_type'] = ClientTypes::find($model);
//		$data['client_type'] = ClientTypes::lists('name','id');

		return view('isp-client-type.client-type-edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ClientTypes $model,Request $request)
	{
		
            $name = $request->input('name');
            $duplicate = ClientTypes::where('name', '=', $name)->first();

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
