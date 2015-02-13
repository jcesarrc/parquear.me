<?php
/* @var $this RegistroController */
/* @var $data Registro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idregistro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idregistro), array('view', 'id'=>$data->idregistro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago')); ?>:</b>
	<?php echo CHtml::encode($data->pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_idplan')); ?>:</b>
	<?php echo CHtml::encode($data->plan_idplan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_motor')); ?>:</b>
	<?php echo CHtml::encode($data->numero_motor); ?>
	<br />

	<a href="javascript:window.print()"> Imprimir</a>

	<?php /*
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

	*/ ?>

</div>