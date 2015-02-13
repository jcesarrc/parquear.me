<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
?>

<h1>Registro de entrada</h1><br/><br/>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
