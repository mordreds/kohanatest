<?php

/* User Defined Routes */
Route::set('blogpost', 'api/(<controller>(/<action>(/<id>)))')->defaults(array('directory' => "api", 'controller' => 'blogpost'));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
  ->defaults(array(
	 'controller' => 'welcome',
	 'action'     => 'index',
  ));