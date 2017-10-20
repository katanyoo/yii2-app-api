<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Katanyoo Ubalee <ubalee.k@gmail.com>
 */
class CountryController extends ActiveController
{
	public $modelClass = 'app\modules\v1\models\Country';

	public function actionExample() {
		return 'Hello !!';
	}
}


