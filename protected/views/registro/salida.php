<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	$model->idregistro=>array('view','id'=>$model->idregistro),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'VerRegistro', 'url'=>array('view', 'id'=>$model->idregistro)),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
?>

<h1>Registro de salida</h1>

<?php $this->renderPartial('_fform', array('model'=>$model, 'str'=>$str, 'more'=>$more,)); ?>