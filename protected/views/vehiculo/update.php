<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->placa=>array('view','id'=>$model->placa),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vehiculo', 'url'=>array('index')),
	array('label'=>'Crear Vehiculo', 'url'=>array('create')),
	array('label'=>'VerVehiculo', 'url'=>array('view', 'id'=>$model->placa)),
	array('label'=>'Administrar Vehiculo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vehiculo <?php echo $model->placa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>