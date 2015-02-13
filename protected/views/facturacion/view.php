<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	$model->id_empresa,
);

$this->menu=array(
	array('label'=>'Listar Facturacion', 'url'=>array('index')),
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
	array('label'=>'Actualizar Facturacion', 'url'=>array('update', 'id'=>$model->id_empresa)),
	array('label'=>'Eliminar Facturacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_empresa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Facturacion', 'url'=>array('admin')),
);
?>

<h1>Información de facturacion</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_empresa',
		'nit',
		'direccion',
		'telefono',
		'iva',
		'numero_inicial',
		'texto',
	),
)); ?>
