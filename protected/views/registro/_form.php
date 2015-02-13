<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScript('select-transfer', "

	$(document).ready(function(){
		$('#Registro_placa').focus();
	});
	$('#Registro_placa').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});

"); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('role'=>'form'),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6">

		<div class="form-group ">
			<?php echo $form->labelEx($model,'hora_entrada'); ?>
			<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg', 'readonly'=>'readonly')); ?>
			<?php echo $form->error($model,'hora_entrada'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'placa'); ?>
			<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6, 'class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'placa'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'numero_motor'); ?>
			<?php echo $form->textField($model,'numero_motor',array('size'=>20,'maxlength'=>20, 'class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'numero_motor'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'serial'); ?>
			<?php echo $form->textField($model,'serial',array('size'=>20,'maxlength'=>20, 'class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'serial'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'propietario'); ?>
			<?php echo $form->textField($model,'propietario',array('size'=>60,'maxlength'=>255, 'class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'propietario'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'cedula'); ?>
			<?php echo $form->textField($model,'cedula',array('size'=>20,'maxlength'=>20, 'class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'cedula'); ?>
		</div>


		<div class="form-group " style="visibility: hidden;">
			<?php echo $form->labelEx($model,'hora_salida'); ?>
			<?php echo $form->textField($model,'hora_salida',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'hora_salida'); ?>
		</div>

		<div class="form-group " style="visibility: hidden;">
			<?php echo $form->labelEx($model,'pago'); ?>
			<?php echo $form->textField($model,'pago',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'pago'); ?>
		</div>
	</div>
	<div class="col-md-6">

		<div class="form-group ">
			<?php echo $form->labelEx($model,'Tipo de vehículo (Ctrl+F1)'); ?>
			<?php $list = CHtml::listData(Tipovehiculo::model()->findAll(),
				'idtipovehiculo', 'tipovehiculocol'); ?>
			<?php echo $form->dropDownList($model, 'tipovehiculo_idtipovehiculo', $list, array('class'=>'form-control input-lg', 'contentEditable'=>'true')); ?>
			<?php echo $form->error($model,'tipovehiculo_idtipovehiculo'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'Tarifa aplicada (Ctrl+F2)'); ?>
			<?php $list = CHtml::listData(Plan::model()->findAll(),
				'idplan', 'descplan'); ?>
			<?php echo $form->dropDownList($model, 'plan_idplan', $list, array('class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'plan_idplan'); ?>
		</div>

		<div class="form-group buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array('class'=>'btn btn-lg btn-success')); ?>
		</div>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->