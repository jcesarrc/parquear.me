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

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehiculo_placa')); ?>:</b>
	<?php echo CHtml::encode($data->vehiculo_placa); ?>
	<br />


</div>