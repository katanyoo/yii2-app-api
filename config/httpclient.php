<?php

return [
	'class' => 'understeam\httpclient\Client',
	'detectMimeType' => true, // automatically transform request to data according to response Content-Type header
	'requestOptions' => [
	// see guzzle request options documentation
	],
	'requestHeaders' => [
	// specify global request headers (can be overrided with $options on making request)
	],
];