<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtipovehiculo'); ?>
		<?php echo $form->textField($model,'idtipovehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipovehiculocol'); ?>
		<?php echo $form->textField($model,'tipovehiculocol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_minuto'); ?>
		<?php echo $form->textField($model,'valor_minuto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimo_minutos'); ?>
		<?php echo $form->textField($model,'minimo_minutos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->