<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	$model->idplan,
);

$this->menu=array(
	array('label'=>'Listar Plan', 'url'=>array('index')),
	array('label'=>'Crear Plan', 'url'=>array('create')),
	array('label'=>'Actualizar Plan', 'url'=>array('update', 'id'=>$model->idplan)),
	array('label'=>'Eliminar Plan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idplan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Plan', 'url'=>array('admin')),
);
?>

<h1>Ver Plan #<?php echo $model->idplan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descplan',
		'descuento',
	),
)); ?>
