<?php
/* @var $this TipovehiculoController */
/* @var $data Tipovehiculo */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('tipovehiculocol')); ?>:</b>
	<?php echo CHtml::encode($data->tipovehiculocol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->valor_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo_minutos')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_minutos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_plazas')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_minutos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requiere_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->requiere_tarjeta==1?'Si':'No'); ?>
	<br />


</div>