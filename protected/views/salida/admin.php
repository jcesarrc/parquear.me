<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Registros</h1>

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
	'id'=>'registro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idregistro',
		'hora_entrada',
		'hora_salida',
		'pago',
		'plan_idplan',
		'vehiculo_placa',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
