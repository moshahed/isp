<?php namespace App\Http\Requests\Registration;

use App\Http\Requests\Request;

class InvestigationRequest extends Request {

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
			'name'		=>	'required|unique:investigations,name,' . $this->segment(2),
			'group_id'	=> 	'required|exists:investigation_group,id',
			'amount'	=> 'numeric',
			'rf_amount'	=> 'numeric'
		];
	}

}
