<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_motor'); ?>
		<?php echo $form->textField($model,'numero_motor',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipovehiculo_idtipovehiculo'); ?>
		<?php echo $form->textField($model,'tipovehiculo_idtipovehiculo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->