<?php
/* @var $this TipovehiculoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipovehiculos',
);

$this->menu=array(
	array('label'=>'Crear Tipovehiculo', 'url'=>array('create')),
	array('label'=>'Administrar Tipovehiculo', 'url'=>array('admin')),
);
?>

<h1>Tipovehiculos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
