<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	'Admin',
);

$this->menu=array(
	array('label'=>'Listar Plan', 'url'=>array('index')),
	array('label'=>'Crear Plan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#plan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Planes</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'plan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descplan',
		'descuento',
		'duracion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
