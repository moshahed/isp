<?php namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model {

	protected $table = 'doctors';

    protected $fillable = ['title', 'name','speciality', 'mobile', 'gender','email', 'address', 'chamber', 'schedule'];


    public function setNameAttribute($value)
    {
        $name = trim($value);
        $name = preg_replace('/\s+/', ' ', $name); /* Remove Duplicate Spaces in sentence */

        $this->attributes['name'] = $name;
    }

    public function setAddressAttribute($value)
    {
        $address = trim($value);
        $address = preg_replace('/\s+/', ' ', $address); /* Remove Duplicate Spaces in sentence */

        $this->attributes['address'] = e($address);
    }

}/* end class */
