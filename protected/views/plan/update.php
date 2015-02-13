<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	$model->idplan=>array('view','id'=>$model->idplan),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Plan', 'url'=>array('index')),
	array('label'=>'Crear Plan', 'url'=>array('create')),
	array('label'=>'VerPlan', 'url'=>array('view', 'id'=>$model->idplan)),
	array('label'=>'Administrar Plan', 'url'=>array('admin')),
);
?>

<h1>Actualizar Plan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>