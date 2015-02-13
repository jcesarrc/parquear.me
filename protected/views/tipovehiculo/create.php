<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar tarifas', 'url'=>array('index')),
	array('label'=>'Administrar tarifas', 'url'=>array('admin')),
);
?>

<h1>Nueva tarifa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>