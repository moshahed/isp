<?php namespace App\Models\Isp;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model {

    protected $table = "packages";

    protected $fillable = ['name','description','amount'];


}
