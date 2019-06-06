<?php
/**
 * Created by PhpStorm.
 * User: alexyi
 * Date: 5/27/2019
 * Time: 6:03 PM
 */
return [
	'default' => 'mongodb',
	'connections' => [
		'mongodb' => [
			'driver'   => 'mongodb',
			'host'     => env('DB_HOST', 'localhost'),
			'port'     => env('DB_PORT', 27017),
			'database' => env('DB_DATABASE'),
			'username' => env('DB_USERNAME'),
			'password' => env('DB_PASSWORD'),
			'options'  => [
				'database' => 'admin' // sets the authentication database required by mongo 3
			]
		],
    ],
        'migrations' => 'migrations',
];