<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Routing login
Route::get('/', ['middleware' => 'guest', function() {
return view('login.login');
}]);
Route::post('/', 'LoginController@auth');

//Route::get('registration', ['middleware' => 'guest','uses' => 'RegistrationHmsiController@index']);
//Route::post('registration', 'RegistrationHmsiController@store');
    Route::resource('registration', 'RegistrationHmsiController');
  

//Routing Dashboard Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function() {
        $data['title'] = 'Home';
        return view('backend.dashboard',$data);
    });
    Route::get('/upload/didownload/{id}', 'Admin\UploadController@update_didownload');
    Route::get('/datadinamis', ['as' => 'admin.dashboard.datadinamis', function() {
        $data['title'] = 'Data Dinamis';
        return view('backend.datadinamis',$data);
}]);

    Route::get('/sekolah', ['as' => 'admin.dashboard.sekolah', function() {
    return view('backend.sekolah');
}]);
    Route::resource('datastatis', 'Admin\DataStatisController');
    Route::resource('setting', 'Admin\SettingController');
    Route::resource('datamenu','Admin\MenuController');
    Route::resource('berita', 'Admin\BeritaController');
    Route::resource('pengumuman', 'Admin\PengumumanController');
    Route::resource('agenda', 'Admin\AgendaController');
    Route::resource('kelas', 'Admin\KelasController');
    Route::resource('kelas/{id}/siswa', 'Admin\SiswaController');
    Route::resource('pegawai', 'Admin\PegawaiController');
    Route::resource('polling', 'Admin\PollingController');
    Route::resource('polling/{id}/jawaban', 'Admin\JawabanController');
    Route::resource('galeri', 'Admin\GaleriController');
    Route::resource('galeri/{id}/foto', 'Admin\FotoController');
    Route::resource('absensi', 'Admin\AbsensiController');
    Route::resource('upload', 'Admin\UploadController');
    Route::post('upload/update', 'Admin\UploadController@updateFile');
    Route::post('absensi/create', ['as' => 'admin.absensi.create', 'uses' => 'Admin\AbsensiController@create']);
    Route::post('absensi/show', ['as' => 'admin.absensi.show', 'uses' => 'Admin\AbsensiController@show']);
    Route::post('setting/save', 'Admin\SettingController@update');
});






Route::get('/logout', 'LoginController@logout');
Route::get('home', 'HomeController@index');




/*Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/