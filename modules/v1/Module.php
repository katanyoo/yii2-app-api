<?php
namespace app\modules\v1;

/**
 * Module class
 * 
 * @author Katanyoo Ubalee <ubalee.k@gmail.com>
 */
class Module extends \yii\base\Module
{
	/**
	 * Controller Namespace
	 * @var string namespace ของ Controller ใน Module
	 */
    public $controllerNamespace = 'app\modules\v1\controllers';

    /**
     * init Method
     * @return [type] [description]
     */
    public function init()
    {
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config.php');
    }
}
