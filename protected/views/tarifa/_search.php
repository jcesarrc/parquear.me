<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtarifa'); ?>
		<?php echo $form->textField($model,'idtarifa'); ?>
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
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->