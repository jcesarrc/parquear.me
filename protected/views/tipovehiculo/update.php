<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tipovehiculos'=>array('index'),
	$model->idtipovehiculo=>array('view','id'=>$model->idtipovehiculo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipovehiculo', 'url'=>array('index')),
	array('label'=>'Crear Tipovehiculo', 'url'=>array('create')),
	array('label'=>'VerTipovehiculo', 'url'=>array('view', 'id'=>$model->idtipovehiculo)),
	array('label'=>'Administrar Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Actualizar tarifa</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'update'=>1)); ?>