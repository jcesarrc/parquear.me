<?php
/* @var $this FacturacionController */
/* @var $data Facturacion */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit')); ?>:</b>
	<?php echo CHtml::encode($data->nit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->numero_inicial); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />



</div>