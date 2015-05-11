<?php namespace hmsiapp\Http\Controllers;

use hmsiapp\Http\Requests\MahasiswaRequest;
use hmsiapp\Http\Controllers\Controller;
use Illuminate\Http\Request;
use hmsiapp\Models\Mahasiswa;
use hmsiapp\Models\Divisi;
use hmsiapp\Models\Angkatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Guard\Auth;


class RegistrationHmsiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		$data['title'] = 'Registrasi HMSI Apps !';
		return view('event.Registration', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MahasiswaRequest $request)
	{
		$input = $request-->all();
		$mahasiswa = new Mahasiswa($input);
		if($mahasiswa->save()){
			return response()->json(['success' => true, 'msg' => 'Registrasi Mahasiswa Berhasil!']);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
