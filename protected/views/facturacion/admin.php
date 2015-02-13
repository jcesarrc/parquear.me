<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */

$this->breadcrumbs=array(
	'Facturacions'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Crear Facturacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#facturacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Facturación</h1>


<?php //echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'facturacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre_empresa',
		'nit',
		'direccion',
		'telefono',
		'iva',
		'numero_inicial',
		'texto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
