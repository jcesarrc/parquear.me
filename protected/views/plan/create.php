<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Plan', 'url'=>array('index')),
	array('label'=>'Administrar Plan', 'url'=>array('admin')),
);
?>

<h1>Crear Plan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>