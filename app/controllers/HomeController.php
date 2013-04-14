<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$reviews = Review::orderBy('created_at', 'desc')->paginate(5);
		$this->layout->content = View::make('index')->with('reviews', $reviews);
	}

	public function addReview()
	{
		$review = new Review;

		$review->name = Input::get('name');
		$review->email = Input::get('email');

		$review->body = Input::get('body');

		$review->save();
	}

}