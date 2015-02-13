<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->idtarifa,
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'Update Tarifa', 'url'=>array('update', 'id'=>$model->idtarifa)),
	array('label'=>'Delete Tarifa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtarifa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>View Tarifa #<?php echo $model->idtarifa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtarifa',
		'valor_minuto',
		'minimo_minutos',
	),
)); ?>
