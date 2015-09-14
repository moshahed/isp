<?php namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model {

	protected $table = "investigations";

    protected $fillable = ['name','group_id','amount','rf_amount','heading_name'];

    public function setNameAttribute($value)
    {
        $name = trim($value);
        $name = preg_replace('/\s+/', ' ', $name); /* Remove Duplicate Spaces in sentence */

        $this->attributes['name'] = $name;
    }

    public function InvestigationGroup(){
        return $this->belongsTo('App\Models\Registration\InvestigationGroup','group_id');
    }

}/* end class */
