<?php namespace App\Http\Requests\Hospital;

use App\Http\Requests\Request;

class PatientAdmissionRequest extends Request {

	protected $rules = [
		'patient_id'	=>	'required|exists:patient_registration,id',
		'doctor_id'		=>	'required|exists:doctors,id'
	];

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = $this->rules;

		if( ! $this->has('_method')){
			$rules['bed_id'] = 'required|exists:bed_no,id|status:bed_no,empty_status,1';
		}

		return $rules;
	}

}
