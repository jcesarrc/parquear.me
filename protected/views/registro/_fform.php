<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>
<style>
	#btn_enviar:hover{
		opacity:1 !important;
	}
	#btn_cancelar:hover{
		opacity:1 !important;
	}
</style>

<?php Yii::app()->clientScript->registerScript('select-transfer', "


	var el1 = $('#btn_enviar');
	var el2 = $('#btn_cancelar');


	$(document).ready(function(){
		$(el1).focus();
	});

	$(el2).css('opacity', '0.3');
	$(el1).focus();

	shortcut.add('Left', function() {
		$(el1).focus();
		$(el1).css('opacity', '1');
        $(el2).css('opacity', '0.3');
	});

    shortcut.add('Right', function() {
        $(el2).focus();
        $(el1).css('opacity', '0.3');
        $(el2).css('opacity', '1');
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
			<h3>Placa: <?php echo $model->placa; ?></h3>
			<h3>Tiempo: <?php echo $str?></h3>
		</div>
		<?php if($more['queda_tiempo']):?>
			<div role="alert" class="alert alert-info">
				<?php echo "Este tiempo es el tiempo restante de su actual plan ".$more['plan_original']; ?>
			</div>
		<?php endif;?>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'hora_entrada'); ?>
			<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg', 'readonly'=>'readonly')); ?>
			<?php echo $form->error($model,'hora_entrada'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'hora_salida'); ?>
			<?php echo $form->textField($model,'hora_salida',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg', 'readonly'=>'readonly')); ?>
			<?php echo $form->error($model,'hora_salida'); ?>
		</div>

		<div class="form-group ">
			<?php echo $form->labelEx($model,'Cantidad a cobrar'); ?>
			<div class="input-group ">
			<span class="input-group-addon">$</span>
			<?php echo $form->textField($model,'pago',array('size'=>10,'maxlength'=>10, 'class'=>'form-control input-lg')); ?>
				</div>
			<?php echo $form->error($model,'pago'); ?>
		</div>

		<div class="form-group buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar Salida' : 'Confirmar salida', array('id'=>'btn_enviar','class'=>'btn btn-lg btn-success')); ?>
			<?php echo CHtml::link('Cancelar', array('registro/buscar'), array('id'=>'btn_cancelar', 'class'=>'btn btn-lg btn-danger')); ?>
		</div>

		<div class="form-group " style="visibility: hidden;">
			<?php echo $form->labelEx($model,'Tarifa aplicada'); ?>
			<?php $list = CHtml::listData(Plan::model()->findAll(),
				'idplan', 'descplan'); ?>
			<?php echo $form->dropDownList($model, 'plan_idplan', $list); ?>
			<?php echo $form->error($model,'plan_idplan'); ?>
		</div>

		<div class="form-group " style="visibility: hidden;">
			<?php echo $form->labelEx($model,'Placa del vehiculo'); ?>
			<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6)); ?>
			<?php echo $form->error($model,'placa'); ?>
		</div>


<?php $this->endWidget(); ?>

</div><!-- form -->