<?php namespace hmsiapp\Http\Controllers;

use hmsiapp\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use hmsiapp\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {

   public function __construct(Guard $auth) {
        $this->auth = $auth;
    }


    public function auth(LoginRequest $request) {
        $nim = $request->get('nim');
        $password = $request->get('password');
        if ($this->auth->attempt(['mhs_nim' => $nim, 'mhs_password' => $password])) {
            return response()->json(['success' => true, 'msg' => 'Login Sukses!', 'user' => $this->auth->user()]);
        }
        return response()->json(['success' => false, 'msg' => 'Username atau Password Anda Salah!']);
    }
    public function logout(){
        $this->auth->logout();
        return redirect()->to('login');
    }

}
