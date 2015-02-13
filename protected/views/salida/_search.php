<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idregistro'); ?>
		<?php echo $form->textField($model,'idregistro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pago'); ?>
		<?php echo $form->textField($model,'pago',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plan_idplan'); ?>
		<?php echo $form->textField($model,'plan_idplan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehiculo_placa'); ?>
		<?php echo $form->textField($model,'vehiculo_placa',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->