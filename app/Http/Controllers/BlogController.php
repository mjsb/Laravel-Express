<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class BlogController extends Controller {

	public function index() {

		$posts = \App\Post::all();
    	return view('blog.index', compact('posts'));
	}


	public function posts () {

		$posts = [

			0 => 'Post um',
			1 => 'Post dois',
			2 => 'Post três',
			3 => 'Post quatro',
			4 => 'Post cinco',
			5 => 'Post seis',
			6 => 'Post sete'

		];

		return view('blog.posts', compact('posts'));

	}
    
}
