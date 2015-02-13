<?php
/* @var $this VehiculoController */
/* @var $data Vehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placa), array('view', 'id'=>$data->placa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_motor')); ?>:</b>
	<?php echo CHtml::encode($data->numero_motor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial')); ?>:</b>
	<?php echo CHtml::encode($data->serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipovehiculo_idtipovehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->tipovehiculo_idtipovehiculo); ?>
	<br />


</div>