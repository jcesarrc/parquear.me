<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->idtarifa=>array('view','id'=>$model->idtarifa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'View Tarifa', 'url'=>array('view', 'id'=>$model->idtarifa)),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>Update Tarifa <?php echo $model->idtarifa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>