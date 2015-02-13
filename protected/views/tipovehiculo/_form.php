<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipovehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('role'=>'form'),
)); ?>

<?php
	if(!isset($update)){
	$results = Tipovehiculo::model()->findAll(array());
	$count = count( $results );
	$model->idtipovehiculo = $count + 1;
}
?>
	<div class="col-md-6">
	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tipovehiculocol'); ?>
		<?php echo $form->textField($model,'tipovehiculocol',array('size'=>45,'maxlength'=>45, 'class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'tipovehiculocol'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'valor_minuto'); ?>
		<div class="input-group ">
			<span class="input-group-addon">$</span>
		<?php echo $form->textField($model,'valor_minuto',array('size'=>10,'maxlength'=>10, 'class'=>'form-control input-lg')); ?>
			</div>
		<?php echo $form->error($model,'valor_minuto'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'minimo_minutos'); ?>
		<?php echo $form->textField($model,'minimo_minutos', array('class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'minimo_minutos'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'numero_plazas'); ?>
		<?php echo $form->textField($model,'numero_plazas', array('class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'numero_plazas'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'requiere_tarjeta'); ?>
		<?php echo $form->checkBox($model,'requiere_tarjeta', array('value'=>1, 'uncheckValue'=>0), array('class'=>'form-control input-lg')); ?>
		<?php echo $form->error($model,'requiere_tarjeta'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
	</div>

		<div class="form-group" style="visibility: hidden;">
			<?php echo $form->labelEx($model,'idtipovehiculo'); ?>
			<?php echo $form->textField($model,'idtipovehiculo', array('class'=>'form-control input-lg')); ?>
			<?php echo $form->error($model,'idtipovehiculo'); ?>
		</div>

	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->