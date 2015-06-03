<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ComentarioRequest extends Request {


	public function authorize(){
		return true;
	}

	public function rules(){
		return 
		[
		'nm_email' => 'required|email',
		'ds_comentario' => 'required|min:3'
		];
	}

	public function messages(){
		return [
			'nm_email.email' => 'Informe um e-mail válido!',
			'nm_email.required' => 'Campo e-mail é obrigatório!',
			'ds_comentario.required' => 'Campo comentário é obrigatório!',
			'ds_comentario.min' => 'Informe pelo menos 3 caracteres!'
		];
	}

}

 ?>