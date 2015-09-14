<?php namespace App\Models\Registration;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model {

	protected $table = 'brokers';

    protected $fillable = ['name','mobile','address'];

    public function setNameAttribute($value)
    {
        $name = trim($value);
        $name = preg_replace('/\s+/', ' ', $name); /* Remove Duplicate Spaces in sentence */

        $this->attributes['name'] = $name;
    }


}/* */
