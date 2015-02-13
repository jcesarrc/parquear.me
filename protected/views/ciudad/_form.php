<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ciudad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idciudad'); ?>
		<?php echo $form->textField($model,'idciudad'); ?>
		<?php echo $form->error($model,'idciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudadcol'); ?>
		<?php echo $form->textField($model,'ciudadcol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ciudadcol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->