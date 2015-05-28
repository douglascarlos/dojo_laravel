<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {

	protected $table = 'comentario';
	protected $primaryKey = 'id_comentario';

	protected $fillable = [

		'ds_comentario','id_post','nm_email'

	];

	public function post (){
		return $this->belongsTo('App\Post', 'id_post');
	}

}
