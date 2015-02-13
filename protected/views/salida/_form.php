<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php $model->hora_entrada = date('Y-m-d H:i:s'); ?>

	<h3>Placa: <?php echo $model->placa; ?></h3>
	<div class="row">
		<?php echo $form->labelEx($model,'Tarifa aplicada'); ?>
		<?php $list = CHtml::listData(Plan::model()->findAll(),
			'idplan', 'descplan'); ?>
		<?php echo $form->dropDownList($model, 'plan_idplan', $list); ?>
		<?php echo $form->error($model,'plan_idplan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

	<div class="row" style="visibility: hidden;">
		<?php echo $form->labelEx($model,'Placa del vehiculo'); ?>
		<?php echo $form->textField($model,'vehiculo_placa',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'vehiculo_placa'); ?>
	</div>

	<div class="row" style="visibility: hidden;">
		<?php echo $form->labelEx($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hora_entrada'); ?>
	</div>

	<div class="row" style="visibility: hidden;">
		<?php echo $form->labelEx($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hora_salida'); ?>
	</div>

	<div class="row" style="visibility: hidden;">
		<?php echo $form->labelEx($model,'Cantidad a cobrar'); ?>
		<?php echo $form->textField($model,'pago',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pago'); ?>
	</div>






<?php $this->endWidget(); ?>

</div><!-- form -->