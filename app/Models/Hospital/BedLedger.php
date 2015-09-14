<?php namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class BedLedger extends Model {

	protected $table = 'bed_ledger';

    protected $fillable = ['bed_id','admission_id','trn_id','trn_tag_id'];




}/* end class */
