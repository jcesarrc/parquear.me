<?php
/* @var $this EstadoempleadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadoempleados',
);

$this->menu=array(
	array('label'=>'Create Estadoempleado', 'url'=>array('create')),
	array('label'=>'Manage Estadoempleado', 'url'=>array('admin')),
);
?>

<h1>Estadoempleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
