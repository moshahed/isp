<?php namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class HospitalBillGenerate extends Model {

	protected $table = 'hospital_bill_generate';

    protected $fillable = ['admission_id'];

}
