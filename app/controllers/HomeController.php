<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$project_tag = Tag::where('alias', '=', 'project')->first();
		$project_articles = Tag::find($project_tag->id)->articles;
		return View::make('index')
			->with('project_articles', $project_articles);
	}

}