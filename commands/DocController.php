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
    	echo "\033[0;35m", "Processing API document source files." . PHP_EOL;
        echo shell_exec('./vendor/bin/apidoc api --color=always --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./modules ./web/docs/apidoc --guide=../guide-en --guide=../guide-en') . PHP_EOL;
        echo "\033[0;35m", "Processing guide source files." . PHP_EOL;
        echo shell_exec('./vendor/bin/apidoc guide --color=always --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./web/docs/src/guide ./web/docs/guide-en --apiDocs=../apidoc') . PHP_EOL;
        echo "\033[0;35m", "Processing guide-th source files." . PHP_EOL;
        echo shell_exec('./vendor/bin/apidoc guide --color=always --interactive=0 --pageTitle="' . Yii::$app->params['serviceName'] . '" ./web/docs/src/guide-th ./web/docs/guide-th --apiDocs=../apidoc') . PHP_EOL;
    }
}
