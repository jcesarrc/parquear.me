<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->placa,
);

$this->menu=array(
	array('label'=>'Listar Vehiculo', 'url'=>array('index')),
	array('label'=>'Crear Vehiculo', 'url'=>array('create')),
	array('label'=>'Actualizar Vehiculo', 'url'=>array('update', 'id'=>$model->placa)),
	array('label'=>'Eliminar Vehiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->placa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Vehiculo', 'url'=>array('admin')),
);
?>

<h1>Ver Vehiculo #<?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'placa',
		'numero_motor',
		'serial',
		'propietario',
		'cedula',
		'tipovehiculo_idtipovehiculo',
	),
)); ?>
