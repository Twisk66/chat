<?php

// change the following paths if necessary
$yiilite=dirname(__FILE__).'/../../../framework/yiilite.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiilite);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createConsoleApplication($config);
