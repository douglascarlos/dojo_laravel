<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';

	public function post(){
		return $this->belongsTo('Post', 'id_post');
	}

}
