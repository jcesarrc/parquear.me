<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Listar Vehiculo', 'url'=>array('index')),
	array('label'=>'Crear Vehiculo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehiculo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Vehiculos</h1>

<p>
Puede utilizar operadores de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de los campos de búsqueda para especificar cómo debe hacerse.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiculo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'placa',
		'numero_motor',
		'serial',
		'propietario',
		'cedula',
		'tipovehiculo_idtipovehiculo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
