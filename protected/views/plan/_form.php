<?php
/* @var $this PlanController */
/* @var $model Plan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="col-md-6">

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Nombre del plan'); ?>
		<?php echo $form->textField($model,'descplan',array('size'=>60,'maxlength'=>255, 'class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'descplan'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Días del plan'); ?>
		<?php echo $form->textField($model,'duracion',array('size'=>60,'maxlength'=>255, 'class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'duracion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Costo'); ?>
		<div class="input-group ">
			<span class="input-group-addon">$</span>
		<?php echo $form->textField($model,'descuento',array('size'=>10,'maxlength'=>10, 'class'=>'form-control input-lg')); ?>
			</div>
		<?php echo $form->error($model,'Costo'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->