<?php namespace hmsiapp\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model {

	protected $table = "divisi";
	protected $primaryKey = "";
	protected $fillable = ['divisi_id', 'divisi_nama', 'masa_bhakti_id'] ;

	public function masaBhakti(){
		$this->hasMany('hmsiapp\Models\MasaBhakti', 'masa_bhakti_id');
	}
}
