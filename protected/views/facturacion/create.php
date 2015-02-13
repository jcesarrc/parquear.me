<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Facturacion', 'url'=>array('index')),
	array('label'=>'Administrar Facturacion', 'url'=>array('admin')),
);
?>

<h1>Crear Facturacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>