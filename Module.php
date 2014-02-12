<?php

namespace sheillendra\smsblasting;


class Module extends \yii\base\Module
{
	public $controllerNamespace = 'sheillendra\smsblasting\controllers';

	public function init()
	{
		parent::init();
		\Yii::$app->getI18n()->translations['smsblasting*'] = [
			'class' => 'yii\i18n\PhpMessageSource',
			'basePath' => '@sheillendra/smsblasting/messages',
		];
	if(isset(\Yii::$app->view->theme->active)){
		\Yii::$app->view->theme->pathMap['@sheillendra/smsblasting/views'] = ['@sheillendra/smsblasting/themes/'.\Yii::$app->view->theme->active.'/views'];
	}
		// custom initialization code goes here
	}
}
