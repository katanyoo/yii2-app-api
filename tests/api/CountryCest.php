<?php
use app\fixtures\ClientFixture;
use app\fixtures\CountryFixture;

class CountryCest
{
    public function _before(ApiTester $I)
    {
        $I->haveFixtures([
            'client' => [
                'class' => ClientFixture::className(),
                'dataFile' => codecept_data_dir() . 'client.php'
            ],
            'country' => [
                'class' => CountryFixture::className(),
                'dataFile' => codecept_data_dir() . 'country.php'
            ],
        ]);
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function createByAnonymousTest(ApiTester $I)
    {
        $I->wantTo('Create Country by Anonumous');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPOST('/v1/countries', ['name' => 'Thailand']);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::UNAUTHORIZED); // 401
    }

    public function createTest(ApiTester $I)
    {
        $I->wantTo('Create Country');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->amBearerAuthenticated('o0aLuaxu_d3QcchvtuzXeBHrJ4aumx_2');
        $I->sendPOST('/v1/countries', ['name' => 'Thailand']);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::CREATED); // 201
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'name' => 'Thailand'
        ]);
    }
}
