<?php

return array(


	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $_ENV['DB_HOST'],
			'database'  => 'leon_servers2',
			'username'  => 'leon_dev',
			'password'  => $_ENV['DB_PASSWORD'],
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	)

);
