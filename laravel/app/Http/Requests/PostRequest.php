<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 * Obter as regras de validação que se aplicam ao pedido.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'id_post'  => ['required'],
			'ds_post' => ['required']
		];
	}


	/**
	 * Get the validation rules messages
	 * Obter as mensagens regras de validação
	 * 
	 * @return array
	 */
	public function messages()
	{
		return [
			'id_post.required' => 'ID Post é obrigatório',
			'ds_post.required' => 'Post é obrigatório'
		];
	}

}
