<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Addresses ⇄ Personnel',
	'description' => 'Bidirectional connection between ext:addresses and ext:personnel.',
	'category' => 'fe',
	'version' => '1.1.0',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Tanel Põld',
	'author_email' => 'tanel@brightside.ee',
	'author_company' => 'Brightside OÜ / t3brightside.com',
	'constraints' => [
		'depends' => [
			'typo3' => '12.4.0 - 14.9.99',
			'addresses' => '2.0.0 - 2.99.99',
            'personnel' => '5.0.0-5.99.99',
		],
	],
];
