<?php
/* @var $this EstadoempleadoController */
/* @var $model Estadoempleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idestadoempleado'); ?>
		<?php echo $form->textField($model,'idestadoempleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoempleadocol'); ?>
		<?php echo $form->textField($model,'estadoempleadocol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->