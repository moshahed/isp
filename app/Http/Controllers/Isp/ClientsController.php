<?php namespace App\Http\Controllers\Isp;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\CorporateClients;
use Illuminate\Http\Request;
use App\Models\Admin\CompanyInfo;
use App\Models\Isp\Client;
use App\Models\Isp\Packages;
use App\Models\Isp\ClientTypes;
use App\Models\Isp\SecondaryPops;
use App\Models\Isp\CorporateClient;
use App\Models\Isp\NonCorporateClient;

class ClientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//              return $data['all_client']=Client::with(['CorporateClient'])->get();
//            $all_client=Client::with(['CorporateClient'])->where('client_type_id',2)->get();
                $all_client=Client::with(['CorporateClient','NonCorporateClient'])->get();
//             return $data['all_client']=Client::all();
//            return $data['all_client']->NonCorporateClients->login_id;
		return View('isp-client.client-list',get_defined_vars());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Client $model)
	{
            $data['client_type'] = ClientTypes::lists('name','id');
            $data['secondary_pops'] = SecondaryPops::lists('name','id');
           
            $data['client_package'] = Packages::lists('name','id');
            return View('isp-client.create-client',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Client $model, Request $request)
	{
            return $package_description=$request->package_description;
            
            $name = $request->name;
            $duplicate = $model::where('name', '=', $name)->first();

            if (!empty($duplicate)) {
                return 'Already Exists Client Name!';
            }
            
            
            $client_type_id=$request->client_type_id;
//            $secondary_pop_id=$request->secondary_pop_id;
            $package_id=$request->package_id;
            $name=trim($request->name);
            $contact_person=trim($request->contact_person);
            $billing_person=trim($request->billing_person);
            $contact_no=trim($request->contact_no);
            $pop=trim($request->pop);
            $email=trim($request->email);
            $address=trim($request->address);
            
            $client_info = New $model;
            $client_info->client_type_id = $client_type_id;            
            $client_info->package_id = $package_id;
            $client_info->name = $name;
            $client_info->contact_person=$contact_person;
            $client_info->billing_person=$billing_person;
            $client_info->contact_no=$contact_no;
            $client_info->pop = $pop;
            $client_info->email = $email;
            $client_info->address = $address;
            $client_info->save();

//            return $client_info->id;


        //if Home user Client
            if($client_type_id==1):
            $client_id=$client_info->id;
            $secondary_pop_id=$request->secondary_pop_id;
            $package_description=$request->package_description;
            $login_id=trim($request->login_id);
            
            $home_client = New NonCorporateClient();
            $home_client->client_id = $client_id;
            $home_client->secondary_pop_id=$secondary_pop_id;
            $home_client->package_description=$package_description;
            $home_client->login_id = $login_id;            
            $home_client->save();
            
            //if Corporate 
            elseif($client_type_id==2):
            $client_id=$client_info->id;
            $switch_port_no=trim($request->switch_port_no);
            $service_description=trim($request->service_description);
            $bandwidth=trim($request->bandwidth);
            $ip_address=trim($request->ip_address);
            
            $corporate_client = New CorporateClient();
            $corporate_client->client_id = $client_id;
            $corporate_client->switch_port_no = $switch_port_no;         
            $corporate_client->service_description = $service_description;         
            $corporate_client->bandwidth = $bandwidth;         
            $corporate_client->ip_address = $ip_address;         
            $corporate_client->save();
            endif;
            
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
	public function edit(Client $model)
        {
               $data['client_info'] = $model;
               $data['client_type'] = AreaGroups::lists('name', 'id');
               $data['client_area'] = AreaGroups::lists('name', 'id');
               $data['client_package'] = AreaGroups::lists('name', 'id');
               return View('isp-client.client-edit', $data);
           }

           /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Client $model, Request $request)
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
        
        public function clientCategory(Client $model, Request $request)
        {
//            return 'hello Category';
                   $request->client_type;
               if ($request->client_type == 1) {
                   $data['secondary_pops'] = SecondaryPops::lists('name', 'id');
                   return View('isp-client.non-corporate-client',$data)->render();
               } elseif ($request->client_type == 2) {
                   return View('isp-client.corporate-client')->render();
               }
           }
           
           public function clientPackage(){
               return 'client package';
           }

}
