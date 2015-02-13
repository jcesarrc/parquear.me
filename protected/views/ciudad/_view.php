<?php
/* @var $this CiudadController */
/* @var $data Ciudad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idciudad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idciudad), array('view', 'id'=>$data->idciudad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudadcol')); ?>:</b>
	<?php echo CHtml::encode($data->ciudadcol); ?>
	<br />


</div>