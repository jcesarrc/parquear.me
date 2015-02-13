<?php
/* @var $this EstadoempleadoController */
/* @var $model Estadoempleado */

$this->breadcrumbs=array(
	'Estadoempleados'=>array('index'),
	$model->idestadoempleado=>array('view','id'=>$model->idestadoempleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadoempleado', 'url'=>array('index')),
	array('label'=>'Create Estadoempleado', 'url'=>array('create')),
	array('label'=>'View Estadoempleado', 'url'=>array('view', 'id'=>$model->idestadoempleado)),
	array('label'=>'Manage Estadoempleado', 'url'=>array('admin')),
);
?>

<h1>Update Estadoempleado <?php echo $model->idestadoempleado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>