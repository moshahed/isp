<?php namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class BedType extends Model {

	protected $table = 'bed_types';

    protected $fillable = ['name'];

}
