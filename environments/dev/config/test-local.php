<?php
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/web.php',
    require __DIR__ . '/web-local.php',
    require __DIR__ . '/test.php',
    [
    ]
);
