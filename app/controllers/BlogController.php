<?php

class BlogController extends BaseController {

	public function getIndex()
	{
		$blogs = Article::all();

		foreach($blogs as $blog) {
			// e($blog['content']);
		}

		return View::make('blog/index')
			->with(['blogs' => $blogs]);
	}

	public function getPost($alias)
	{
		$blog = Article::where('alias', $alias)->first()->toArray();
		return View::make('blog/article')
			->with(['blog' => $blog]);
	}

}