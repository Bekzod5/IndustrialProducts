<?php
/* @var $this MijozController */
/* @var $data Mijoz */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MijozIsmi')); ?>:</b>
	<?php echo CHtml::encode($data->MijozIsmi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MijozEmail')); ?>:</b>
	<?php echo CHtml::encode($data->MijozEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MijozTelNomer')); ?>:</b>
	<?php echo CHtml::encode($data->MijozTelNomer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MijozParol')); ?>:</b>
	<?php echo CHtml::encode($data->MijozParol); ?>
	<br />


</div>