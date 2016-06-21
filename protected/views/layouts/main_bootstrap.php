<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<div class="conteiner">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<nav class="navbar navbar-default navbar-inverse">
					<?php $this->widget('zii.widgets.CMenu', array(
						'items' => array(
							array('label' => 'Чат', 'url' => array('site/index')),
							array('label' => 'Регистрация', 'url' => array('site/register'), 'visible' => Yii::app()->user->isGuest),
							array('label' => 'Настройки', 'url' => array('site/config'), 'visible' => !Yii::app()->user->isGuest),
							array('label' => 'Авторизация', 'url' => array('site/login'), 'visible' => Yii::app()->user->isGuest),
							array('label' => 'Выход', 'url' => array('site/logout'), 'visible' => !Yii::app()->user->isGuest),
							),
						'htmlOptions' => array('class' => 'nav navbar-nav'),
					)); ?>
				</nav>
				<?php echo $content; ?>	
			</div>
		</div>
	</div>
</body>
</html>