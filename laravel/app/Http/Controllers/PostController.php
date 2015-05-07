<?php namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use App\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller {

	public function __construct(){
		$this->middleware('guest');
	}

	public function index(){

		$posts = Post::all();

		return view('post.posts')
			->with('posts', $posts);
	}

	public function create(){
		return view('post.create');
	}

	public function store(Request $request){
		
		$post = new Post();
		$post->ds_post = $request->get('ds_post');
		$post->save();

		return redirect('/post')
			->with('alert', [ 
				'message' => 'Post criado com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null
			]);
	}

	public function edit($id){

		$post = Post::find($id);

		if(!is_object($post)){
			return redirect('/post')
				->with('alert', [ 
					'message' => 'Post não encontrado', 
					'type' => 'danger', 
					'before' => null, 
					'after' => null
				]);
		}

		return view('post.edit')
			->with('post', $post);
	}

	public function update(Request $request, $id){

		$post = Post::find($id);
		$post->ds_post = $request->get('ds_post');
		$post->save();

		return redirect('/post')
			->with('alert', [ 
				'message' => 'Post alterado com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null
			]);
	}

	public function destroy($id){

        Post::destroy($id);

        return redirect('/post')
        	->with('alert', [ 
				'message' => 'Post excluído com sucesso', 
				'type' => 'success', 
				'before' => null, 
				'after' => null 
			]);
    }

}
