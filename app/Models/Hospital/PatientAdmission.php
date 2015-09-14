<?php namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;

class PatientAdmission extends Model {

	protected $table ='patient_admission';

    protected $fillable = ['patient_id','doctor_id','bed_id','reason_of_admission','care_of','relation_with_patient','relatives_address','relatives_mobile'];


    public static function boot()
    {
        parent::boot();

        static::creating(function($post)
        {
//            $post->created_by = Auth::user()->id;
//            $post->updated_by = Auth::user()->id;

            $post->created_by = 1;
            $post->updated_by = 1;
        });

        static::updating(function($post)
        {
//            $post->updated_by = Auth::user()->id;
            $post->updated_by = 1;
        });
    }

    public function patientInfo(){
        return $this->belongsTo('App\Models\Registration\Patient','patient_id');
    }

    public function doctorInfo(){
        return $this->belongsTo('App\Models\Registration\Doctor','doctor_id');
    }

    public function bedInfo(){
        return $this->belongsTo('App\Models\Hospital\BedNo','bed_id');
    }

}/* End Class */
