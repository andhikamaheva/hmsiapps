<?php namespace hmsiapp\Http\Requests;

use hmsiapp\Http\Requests\Request;

class Mahasiswa extends Request {

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
			'mhs_nim' => 'required'
		];
	}

	public function messages(){
		return [
			'mhs_nim.required' => 'Nim Diperlukan!'
		]
	}


}
