<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\modules\v1\models\User;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Katanyoo Ubalee <ubalee.k@gmai.com>
 */
class UserController extends Controller
{
    public $username;
    public $password;

    public function options($actionID)
    {
        return ['username', 'password'];
    }
    
    public function optionAliases()
    {
        return [
            'u' => 'username',
            'p' => 'password'
        ];
    }

    /**
     * This command for signup new user.
     */
    public function actionSignup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateAccessToken();
        
        $user->save() ? print_r($user->attributes) : print_r($user->errors);
    }
}
