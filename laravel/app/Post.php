<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model {

	protected $table = 'post';
	protected $primaryKey = 'id_post';

	protected $fillable = [

		'ds_post','id_categoria','nm_titulo'

	];

	public function categoria (){
		return $this->belongsTo('App\Categoria', 'id_categoria');
	}

	public function comentarios (){
		return $this->hasMany('App\Comentario', 'id_post');
	}



}
