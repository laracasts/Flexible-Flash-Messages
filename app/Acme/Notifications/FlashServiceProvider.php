<?php namespace Acme\Notifications;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

	/**
	 * Create binding
	 */
	public function register()
	{
		$this->app->bindShared('flash', function()
		{
		   return $this->app->make('Acme\Notifications\FlashNotifier');
		});
	}

}