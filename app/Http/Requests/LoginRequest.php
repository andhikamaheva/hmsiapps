<?php namespace hmsiapp\Http\Requests;

use hmsiapp\Http\Requests\Request;

class LoginRequest extends Request {

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
			'nim' 		=> 'required|min:11|max:11',
			'password' 	=> 'required|min:8',
		];
	}

	public function messages(){
		return [
			'nim.required'			=> 'NIM Diperlukan!',
			'nim.min' 				=> 'NIM minimal 11 Karakter!',
			'nim.max' 				=> 'NIM Maksimal 11 Karakter',
			'password.required' 	=> 'Password Diperlukan!',
			'password.min' 			=> 'Password Minimal 6 Karakter!',
		];
	}


}
