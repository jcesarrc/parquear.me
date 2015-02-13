<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idempleado), array('view', 'id'=>$data->idempleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eps')); ?>:</b>
	<?php echo CHtml::encode($data->eps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoempleado_idestadoempleado')); ?>:</b>
	<?php echo CHtml::encode($data->estadoempleado_idestadoempleado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_idciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_idciudad); ?>
	<br />

	*/ ?>

</div>