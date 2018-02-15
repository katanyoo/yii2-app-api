<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;

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
	 * behavior ต่างๆ ของ controller
	 * @return Array behaviors
	 */
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class' => CompositeAuth::className(),
			'authMethods' => [
				HttpBasicAuth::className(),
				HttpBearerAuth::className(),
			],
			'except' => ['example', 'index']
		];
		return $behaviors;
	}

	/**
	 * Example action
	 * @return string anytext
	 */
	public function actionExample() {
		return ['Hello !!'];
	}
}
