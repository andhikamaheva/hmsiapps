<?php 
namespace hmsiapp\Models;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model {

	protected $table = "angkatan";
	protected $primaryKey = "angkatan_id";
	protected $fillable = ['angkatan_id', 'angkatan_tahun'];
	protected $timestamps = false;



}
