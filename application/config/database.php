<?php defined('SYSPATH') OR die('No direct access allowed.');


if (Kohana::$environment == Kohana::PRODUCTION)
{
    return array
    (
    	'default' => array
    	(
    		'type'       => 'MySQL',
    		'connection' => array(
    			/**
    			 * The following options are available for MySQL:
    			 *
    			 * string   hostname     server hostname, or socket
    			 * string   database     database name
    			 * string   username     database username
    			 * string   password     database password
    			 * boolean  persistent   use persistent connections?
    			 * array    variables    system variables as "key => value" pairs
    			 *
    			 * Ports and sockets may be appended to the hostname.
    			 */
    			'hostname'   => '127.0.0.1',
    			'database'   => '',
    			'username'   => '',
    			'password'   => '',
    			'persistent' => FALSE,
    		),
    		'table_prefix' => '',
    		'charset'      => 'utf8',
    		'caching'      => FALSE,
    	),
    	'alternate' => array(
    		'type'       => 'PDO',
    		'connection' => array(
    			/**
    			 * The following options are available for PDO:
    			 *
    			 * string   dsn         Data Source Name
    			 * string   username    database username
    			 * string   password    database password
    			 * boolean  persistent  use persistent connections?
    			 */
    			'dsn'        => 'mysql:host=localhost;dbname=kohana',
    			'username'   => 'root',
    			'password'   => 'r00tdb',
    			'persistent' => FALSE,
    		),
    		/**
    		 * The following extra options are available for PDO:
    		 *
    		 * string   identifier  set the escaping identifier
    		 */
    		'table_prefix' => '',
    		'charset'      => 'utf8',
    		'caching'      => FALSE,
    	),
    );

}
elseif (Kohana::$environment == Kohana::DEVELOPMENT)
{
    return array
    (
    	'default' => array
    	(
    		'type'       => 'MySQL',
    		'connection' => array(
    			/**
    			 * The following options are available for MySQL:
    			 *
    			 * string   hostname     server hostname, or socket
    			 * string   database     database name
    			 * string   username     database username
    			 * string   password     database password
    			 * boolean  persistent   use persistent connections?
    			 * array    variables    system variables as "key => value" pairs
    			 *
    			 * Ports and sockets may be appended to the hostname.
    			 */
    			'hostname'   => '127.0.0.1',
    			'database'   => 'todolist',
    			'username'   => 'root',
    			'password'   => '',
    			'persistent' => FALSE,
    		),
    		'table_prefix' => '',
    		'charset'      => 'utf8',
    		'caching'      => FALSE,
    	),
    	'alternate' => array(
    		'type'       => 'PDO',
    		'connection' => array(
    			/**
    			 * The following options are available for PDO:
    			 *
    			 * string   dsn         Data Source Name
    			 * string   username    database username
    			 * string   password    database password
    			 * boolean  persistent  use persistent connections?
    			 */
    			'dsn'        => 'mysql:host=localhost;dbname=kohana',
    			'username'   => 'root',
    			'password'   => 'r00tdb',
    			'persistent' => FALSE,
    		),
    		/**
    		 * The following extra options are available for PDO:
    		 *
    		 * string   identifier  set the escaping identifier
    		 */
    		'table_prefix' => '',
    		'charset'      => 'utf8',
    		'caching'      => FALSE,
    	),
    );

}

