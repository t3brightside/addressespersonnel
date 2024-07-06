<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Addresses & Personnel',
	'description' => 'Bidirectional connection between ext:addresses and ext:personnel records.',
	'category' => 'fe',
	'version' => '1.0.0',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Tanel Põld',
	'author_email' => 'tanel@brightside.ee',
	'author_company' => 'Brightside OÜ / t3brightside.com',
	'constraints' => [
		'depends' => [
			'typo3' => '12.4.0 - 13.9.99',
			'fluid_styled_content' => '12.4.0 - 13.9.99',
			'addresses' => '1.0.0 - 1.99.99',
            'personnel' => '4.0.2-4.99.99',
		],
	],
];
