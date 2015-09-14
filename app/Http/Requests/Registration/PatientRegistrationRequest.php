<?php namespace App\Http\Requests\Registration;

use App\Http\Requests\Request;

class PatientRegistrationRequest extends Request {

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
		return [
			'patient_name'		=> 'required|min:2|max:50',
			'mobile'		=> 'required|max:11',
			'date_of_birth'		=> 'required|date',
			'blood_group'		=> 'required|exists:blood_group,id',
		];
	}

}
