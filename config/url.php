<?php

return [
	'enablePrettyUrl' => true,
	'showScriptName' => true,
	'rules' => [
		[
			'class' => 'yii\rest\UrlRule', 
			'controller' => 'v1/country',
			'extraPatterns' => [
				'GET example' => 'example'
			]
		]
	],
];