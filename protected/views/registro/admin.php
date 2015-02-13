<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
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
");
?>

<h1>Registro de salida</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br/>
<div id="ocultar">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'placa',
			'type' => 'raw',
			'value' => '$data->placa . (strlen($data->hora_salida)==0? CHtml::link("Dar salida",Yii::app()->createUrl("/registro/salida/".$data->idregistro), array("class"=>"btn btn-xs btn-success pull-right")) : "")',
		),
		'hora_entrada',
		'hora_salida',
		'pago',
		array(
			'name' => 'plan_idplan',
			'type' => 'raw',
			'value' => '$data->planIdplan->descplan',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),

)); ?>
</div>