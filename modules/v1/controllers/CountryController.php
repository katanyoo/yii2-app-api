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
	/**
	 * Model class
	 * @var string คลาสที่เชื่อมต่อกับ Controller นี้
	 */
	public $modelClass = 'app\modules\v1\models\Country';

	/**
	 * Example action
	 * @return string anytext
	 */
	public function actionExample() {
		return ['Hello !!'];
	}
}
