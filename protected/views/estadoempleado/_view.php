<?php
/* @var $this EstadoempleadoController */
/* @var $data Estadoempleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestadoempleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idestadoempleado), array('view', 'id'=>$data->idestadoempleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoempleadocol')); ?>:</b>
	<?php echo CHtml::encode($data->estadoempleadocol); ?>
	<br />


</div>