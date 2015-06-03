<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';

	protected $fillable = [

		"nm_categoria", "ds_categoria"
	];

#Testando o git

	public function post(){
		return $this->hasOne('Post', 'id_post');
	}

}
