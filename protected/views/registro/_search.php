<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('role'=>'form'),
)); ?>

<br/><br/>
	<div class="col-md-6">
		<div class="form-group ">
		<?php echo $form->label($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6, 'class'=>'form-control input-sm')); ?>
		</div>
		<div class="form-group ">
			<?php echo $form->label($model,'hora_entrada'); ?>
			<?php echo $form->textField($model,'hora_entrada',array('class'=>'form-control input-sm')); ?>
		</div>
		<div class="form-group ">
			<?php echo $form->label($model,'hora_salida'); ?>
			<?php echo $form->textField($model,'hora_entrada',array('class'=>'form-control input-sm')); ?>
		</div>


		<div class="form-group buttons">
			<?php echo CHtml::submitButton('Buscar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->