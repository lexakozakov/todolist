<?php defined('SYSPATH') or die('No direct script access.');


Route::set('ajax', 'ajax(/<controller>(/<action>(/<id>)))')
	->defaults(array(
	    'directory' => 'Ajax'
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));