<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tipovehiculos'=>array('index'),
	$model->idtipovehiculo,
);

$this->menu=array(
	array('label'=>'Listar Tipovehiculo', 'url'=>array('index')),
	array('label'=>'Crear Tipovehiculo', 'url'=>array('create')),
	array('label'=>'Actualizar Tipovehiculo', 'url'=>array('update', 'id'=>$model->idtipovehiculo)),
	array('label'=>'Eliminar Tipovehiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipovehiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Ver Tipovehiculo #<?php echo $model->idtipovehiculo; ?></h1>

<?php if($model->requiere_tarjeta == 1) $model->requiere_tarjeta = 'Si'; else  $model->requiere_tarjeta = 'No'?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipovehiculocol',
		'valor_minuto',
		'minimo_minutos',
		'numero_plazas',
		'requiere_tarjeta',
	),
)); ?>
