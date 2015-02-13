<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idempleado'); ?>
		<?php echo $form->textField($model,'idempleado',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoempleado_idestadoempleado'); ?>
		<?php echo $form->textField($model,'estadoempleado_idestadoempleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_idciudad'); ?>
		<?php echo $form->textField($model,'ciudad_idciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->