<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::$app->params['companyName'];
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::$app->params['serviceName'] ?></h1>
    </div>

    <div class="body-content text-center">
    	<?php echo 'วิธีการใช้งาน กรุณาอ่าน ', Html::a('คู่มือ '.Yii::$app->params['serviceName'], '@web/docs/apidoc/') ?>
    </div>
</div>
