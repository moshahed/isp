<?php namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class BedNo extends Model {

	protected $table = 'bed_no';

    protected $fillable = ['bed_type_id','name','amount'];

    protected $guarded = ['id'];

    public function bedType()
    {
        return $this->belongsTo('App\Models\Hospital\BedType', 'bed_type_id');
    }

}/* end class */
