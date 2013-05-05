<?php defined('SYSPATH') or die('No direct script access.');

Route::set('facebook', 'facebook(/<action>)')
	->defaults(array(
		'controller' => 'Facebook',
		'action'     => 'index',
	));