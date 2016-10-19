<?php

// Put any helper functions here, but ensure you load it in composer.json under autoload->files['file.location']
// Also, when you change composer autoload config, you need to run `composer dump-autoload`

// To access services via the service provider layer, you have a number of options.
function getFilesystemService() {
	// $this->app->make('filesystem');
	// - or -
	// app('filesystem')
	// - or -
	// App::make('filesystem');
	// - or -
	return $this->app['filesystem'];
}