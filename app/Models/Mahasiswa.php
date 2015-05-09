<?php
namespace hmsiapp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



class Mahasiswa extends Model implements AuthenticatableContract, CanResetPasswordContract{

	protected $table = 'mahasiswa';
    protected $primaryKey = 'mhs_nim';
    protected $fillable = ['mhs_nim', 'angkatan_id', 'divisi_id', 'mhs_password', 'mhs_akses' , 'mhs_nama', 'mhs_gender', 'mhs_photo' ,'mhs_alamat', 'mhs_ttl', 'mhs_email', 'status'];
    protected $hidden = ['password','remember_token'];
    public $timestamps = true;

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
