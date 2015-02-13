<?php
/* @var $this TarifaController */
/* @var $data Tarifa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtarifa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtarifa), array('view', 'id'=>$data->idtarifa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->valor_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimo_minutos')); ?>:</b>
	<?php echo CHtml::encode($data->minimo_minutos); ?>
	<br />


</div>