<?php 
$I = new \ApiTester($scenario);
$I->wantTo('Create Country');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('/v1/countries', ['name' => 'Thailand']);
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::CREATED); // 201
$I->seeResponseIsJson();
$I->seeResponseContainsJson([
	'name' => 'Thailand'
]);