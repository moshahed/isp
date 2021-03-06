<?php namespace App\Http\Requests\Registration;

use App\Http\Requests\Request;

class InvestigationGroupRequest extends Request {

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
			'group_name'	=> 'required|unique:investigation_group,group_name,' . $this->segment(2)
		];
	}

}
