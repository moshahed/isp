<?php namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model {

	protected $table = "patient_registration";

    protected $fillable = ['patient_name','mobile','date_of_birth','address','fathers_name','mothers_name','spouse_name','blood_group','gender'];


    public function setPatientNameAttribute($value)
    {
        $patient_name = trim($value);
        $patient_name = preg_replace('/\s+/', ' ', $patient_name); /* Remove Duplicate Spaces in sentence */

        $this->attributes['patient_name'] = $patient_name;
    }

    public function setAddressAttribute($value)
    {
        $address = trim($value);
        $address = preg_replace('/\s+/', ' ', $address); /* Remove Duplicate Spaces in sentence */

        $this->attributes['address'] = e($address);
    }


}/* end class */
