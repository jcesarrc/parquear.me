<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facturacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="col-md-6">
	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre_empresa'); ?>
		<?php echo $form->textField($model,'nombre_empresa',array('size'=>60,'maxlength'=>255, 'class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'nombre_empresa'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>12,'maxlength'=>12, 'class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'numero_inicial'); ?>
		<?php echo $form->textField($model,'numero_inicial',array('class'=>'form-control input-lg',)); ?>
		<?php echo $form->error($model,'numero_inicial'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('form-groups'=>6, 'cols'=>50, 'class'=>'form-control input-lg','style'=>'height:200px')); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-lg btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->