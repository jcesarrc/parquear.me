<?php
/* @var $this EstadoempleadoController */
/* @var $model Estadoempleado */

$this->breadcrumbs=array(
	'Estadoempleados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadoempleado', 'url'=>array('index')),
	array('label'=>'Manage Estadoempleado', 'url'=>array('admin')),
);
?>

<h1>Create Estadoempleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>