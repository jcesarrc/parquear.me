<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarifa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_minuto'); ?>
		<?php echo $form->textField($model,'valor_minuto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valor_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimo_minutos'); ?>
		<?php echo $form->textField($model,'minimo_minutos'); ?>
		<?php echo $form->error($model,'minimo_minutos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->