<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Katanyoo Ubalee <ubalee.k@gmai.com>
 */
class DocController extends Controller
{
    /**
     * This command generate api and guide document.
     */
    public function actionGenerate()
    {
        echo shell_exec('./vendor/bin/apidoc api --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./modules ./web/docs/apidoc') . PHP_EOL;
        echo shell_exec('./vendor/bin/apidoc guide --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./docs/src/guide ./web/docs/guide-en') . PHP_EOL;
        echo shell_exec('./vendor/bin/apidoc guide --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./docs/src/guide-th ./web/docs/guide-th') . PHP_EOL;
    }
}
