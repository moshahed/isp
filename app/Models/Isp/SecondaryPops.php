<?php namespace App\Models\Isp;

use Illuminate\Database\Eloquent\Model;

class SecondaryPops extends Model {

	protected $table = "secondary_pops";

    protected $fillable = ['main_pop_id','name'];
    
   public function MainPop()
    {
        return $this->belongsTo('App\Models\Isp\MainPops','main_pop_id');
    }

}
