<?php
/* @var $this RegistroController */
/* @var $model Registro */

$this->breadcrumbs=array(
	'Registros'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'Listar Registro', 'url'=>array('index')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
*/
?>

<h1>Registrar vehiculo</h1>
<?php
if(isset($_REQUEST["placa"])){
	$placa = Yii::App()->getRequest()->getQuery("placa");
	$model->vehiculo_placa = $placa;
}
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>