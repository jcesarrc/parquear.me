<?php
/* @var $this EstadoempleadoController */
/* @var $model Estadoempleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadoempleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idestadoempleado'); ?>
		<?php echo $form->textField($model,'idestadoempleado'); ?>
		<?php echo $form->error($model,'idestadoempleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoempleadocol'); ?>
		<?php echo $form->textField($model,'estadoempleadocol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estadoempleadocol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->