<?php namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Model;

class InvestigationGroup extends Model {

	protected $table = 'investigation_group';

    protected $fillable = ['group_name','heading_name'];

    public function setNameAttribute($value)
    {
        $name = trim($value);
        $name = preg_replace('/\s+/', ' ', $name); /* Remove Duplicate Spaces in sentence */

        $this->attributes['name'] = $name;
    }

} /* end class */
