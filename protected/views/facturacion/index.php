<?php
/* @var $this FacturacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facturacions',
);

$this->menu=array(
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
	array('label'=>'Administrar Facturacion', 'url'=>array('admin')),
);
?>

<h1>Facturación</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
