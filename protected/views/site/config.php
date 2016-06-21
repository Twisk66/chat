<?php /* @var $this Controller */
	$this->pageTitle = Yii::app()->name . ' - Настройки пользователя';
?>

<h1>Настройки пользователя</h1>

<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'UserConf-form',
	'enableAjaxValidation' => false,
	)); ?>

<?php echo $form->errorSummary($model) ?>

<div class="form-group">
	<?php echo $form->labelEx($model,'color'); ?>
	<?php echo $form->dropDownList($model,'color', $model->_color,array('class'=>'form-control')); ?>
	<?php echo $form->error($model,'color'); ?>
</div>

<div class="form-group">
	<?php echo $form->checkBox($model,'date_out'); ?>
	<?php echo $form->label($model,'date_out'); ?>
	<?php echo $form->error($model,'date_out'); ?>
</div>

<div class="form-group buttons">
	<?php echo CHtml::submitButton('Сохранить',array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>