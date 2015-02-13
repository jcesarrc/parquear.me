<?php
/* @var $this PlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plans',
);

$this->menu=array(
	array('label'=>'Crear Plan', 'url'=>array('create')),
	array('label'=>'Administrar Plan', 'url'=>array('admin')),
);
?>

<h1>Planes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
