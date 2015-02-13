<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->idregistro,
);
/*
$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Actualizar Registro', 'url'=>array('update', 'id'=>$model->idregistro)),
	array('label'=>'Eliminar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idregistro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
*/
?>

<h1>Ver Registro #<?php echo $model->idregistro; ?></h1>
<?php if(strlen($model->hora_salida)<1):
	$model->hora_salida = "SIN SALIR";
	?>
<?php endif?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vehiculo_placa',
		'hora_entrada',
		'hora_salida',
		'pago',
	),
)); ?>
