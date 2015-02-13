<?php
/* @var $this PlanController */
/* @var $model Plan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idplan'); ?>
		<?php echo $form->textField($model,'idplan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descplan'); ?>
		<?php echo $form->textField($model,'descplan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento'); ?>
		<?php echo $form->textField($model,'descuento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->