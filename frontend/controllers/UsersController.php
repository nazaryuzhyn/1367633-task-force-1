<?php

namespace frontend\controllers;

use frontend\models\User;

class UsersController extends \yii\web\Controller
{
	public function actionIndex()
	{
		$users = User::find()->where(['role' => 'implementer'])->all();

		return $this->render('index', ['users' => $users]);
	}
}
