<?php namespace App\Http\Requests\Clienttype;

use App\Http\Requests\Request;
//**Artisan Command ** artisan make:request ClientType\\CreateUserRequest
class ClienttypeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'		=> 'required|min:2|max:50'		
		];
	}

}
