<?php
/* @var $this PlanController */
/* @var $data Plan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idplan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idplan), array('view', 'id'=>$data->idplan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descplan')); ?>:</b>
	<?php echo CHtml::encode($data->descplan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento')); ?>:</b>
	<?php echo CHtml::encode($data->descuento); ?>
	<br />


</div>