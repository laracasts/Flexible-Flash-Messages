<?php

Route::get('test', function()
{
	Flash::message('Welcome aboard');
	//Flash::success('Welcome aboard');
	//Flash::error('Welcome aboard');
	//Flash::overlay('Welcome aboard');

	return Redirect::to('/');
});

Route::get('/', function()
{
	return View::make('hello');
});