<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>Create Tarifa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>