<?php namespace App\Models\Isp;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = "clients";

    protected $fillable = ['client_type_id','secondary_pop_id','package_id','name','contact_person','billing_person','contact_no','pop','email','address'];


    
    public function ClientType()
    {
        return $this->belongsTo('App\Models\Isp\ClientTypes','client_type_id');
    }
    
    public function SecondaryPops()
    {
        return $this->belongsTo('App\Models\Isp\SecondaryPops','secondary_pop_id');
    }
    
    public function ClientPackage()
    {
        return $this->belongsTo('App\Models\Isp\Packages','package_id');
    }
    public function NonCorporateClient()
    {
        return $this->hasOne('App\Models\Isp\NonCorporateClient');
    }
    public function CorporateClient()
    {
        return $this->hasOne('App\Models\Isp\CorporateClient');
    }
    

}
