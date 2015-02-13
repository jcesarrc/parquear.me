<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_motor'); ?>
		<?php echo $form->textField($model,'numero_motor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numero_motor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row" style="visibility: hidden;">
		<?php echo $form->labelEx($model,'tipovehiculo_idtipovehiculo'); ?>
		<?php echo $form->textField($model,'tipovehiculo_idtipovehiculo'); ?>
		<?php echo $form->error($model,'tipovehiculo_idtipovehiculo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->