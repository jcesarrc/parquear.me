<?php
/* @var $this TarifaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tarifas',
);

$this->menu=array(
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>Tarifas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
