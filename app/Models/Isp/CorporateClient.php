<?php namespace App\Models\Isp;

use Illuminate\Database\Eloquent\Model;

class CorporateClient extends Model {

	protected $table = 'corporate_clients';

    protected $fillable = ['client_id','switch_port_no','service_description','bandwidth','ip_address'];

}
