<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Admin',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
$(document).ready(function(){
	$('#Registro_placa').focus();
});
$('#Registro_placa').keyup(function() {
	$(this).val($(this).val().toUpperCase());
});

");
?>

<h1>Registro de salida</h1>


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
			<?php echo $form->textField($model,'placa',array('size'=>6,'maxlength'=>6, 'class'=>'form-control input-lg')); ?>
		</div>
		<div class="form-group buttons">
			<?php echo CHtml::submitButton('Dar salida', array('class'=>'btn btn-lg btn-primary')); ?>
		</div>

		<?php if(Yii::app()->user->hasFlash('error')):?>
			<div role="alert" class="alert alert-danger">
				<?php echo Yii::app()->user->getFlash('error'); ?>
			</div>
		<?php endif;?>

	</div>

	<?php $this->endWidget(); ?>



</div><!-- search-form -->