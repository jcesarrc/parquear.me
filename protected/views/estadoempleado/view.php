<?php
/* @var $this EstadoempleadoController */
/* @var $model Estadoempleado */

$this->breadcrumbs=array(
	'Estadoempleados'=>array('index'),
	$model->idestadoempleado,
);

$this->menu=array(
	array('label'=>'List Estadoempleado', 'url'=>array('index')),
	array('label'=>'Create Estadoempleado', 'url'=>array('create')),
	array('label'=>'Update Estadoempleado', 'url'=>array('update', 'id'=>$model->idestadoempleado)),
	array('label'=>'Delete Estadoempleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestadoempleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadoempleado', 'url'=>array('admin')),
);
?>

<h1>View Estadoempleado #<?php echo $model->idestadoempleado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestadoempleado',
		'estadoempleadocol',
	),
)); ?>
