<?php
/* @var $this TipovehiculoController */
/* @var $model Tipovehiculo */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Listar tarifas', 'url'=>array('index')),
	array('label'=>'Crear tarifa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipovehiculo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar tarifas</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipovehiculo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idtipovehiculo',
		'tipovehiculocol',
		'valor_minuto:number',
		'minimo_minutos:number',
		'requiere_tarjeta:boolean',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
