<?php namespace App\Models\Isp;

use Illuminate\Database\Eloquent\Model;

class NonCorporateClient extends Model {

	protected $table = 'non_corporate_clients';

    protected $fillable = ['client_id','secondary_pop_id','package_description','login_id'];

}
