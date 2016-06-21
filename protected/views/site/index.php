<?php /* @var $this Controller */ 
	$this->pageTitle = Yii::app()->name;
?>
<?php if(!$user->isGuest){ ?>
	<p >Здравствуйте, <?php echo $user->name; ?></p>
	<?php } ?>
<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
<div class="panel panel-default">
<div class="panel-body">
	<div class="chat-text">

	</div>
</div>
</div>

<!-- Форма сообщений -->
<?php if(!$user->isGuest){ ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
	)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="form-group">
	<div><p class="error"></p></div>
	<?php echo $form->textArea($model,'text',array('class'=>'form-control')); ?>
	<?php echo $form->error($model,'text'); ?>
</div>

<div class="form-group buttons">
	<?php echo CHtml::submitButton('Подтвердить',array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>

<?php } ?>