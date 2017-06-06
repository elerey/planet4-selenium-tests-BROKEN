<?php

/**
*
* Planet 4 Selenium Config
*
**/

$config = (

	'testserver' => array(
			//base URL for selenium server
			'selenium' => array (
				'url' => 'http://localhost:4444/wd/hub',
				// Extra capabilities
				'capabilities' => array()
				),
		),
	'browsers' => array(
		'default' => 'firefox',
		'firefox' => array(
			'name' => 'Firefox',
			'type' => 'firefox'
			),
		'chrome' => array(
			'name' => 'Chrome',
			'type' => 'chrome'
			)
		)

	);