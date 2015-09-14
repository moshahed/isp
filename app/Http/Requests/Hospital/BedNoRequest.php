<?php namespace App\Http\Requests\Hospital;

use App\Http\Requests\Request;

class BedNoRequest extends Request {

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
			'bed_type_id'	=>	'required|exists:bed_types,id',
			'name'			=>	'required|unique:bed_no,name,' . $this->segment(2)
		];
	}

}
