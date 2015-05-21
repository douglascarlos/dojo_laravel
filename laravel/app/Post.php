<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model {

	protected $table = 'post';
	protected $primaryKey = 'id_post';

	protected $fillable = [

		'ds_post','id_categoria'

	];

	public function categoria (){
		return $this->hasOne('App\Categoria', 'id_categoria');
	}



}
