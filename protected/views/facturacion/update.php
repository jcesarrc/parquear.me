<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->id_empresa=>array('view','id'=>$model->id_empresa),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Facturacion', 'url'=>array('index')),
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
	array('label'=>'VerFacturacion', 'url'=>array('view', 'id'=>$model->id_empresa)),
	array('label'=>'Administrar Facturacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Facturacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>