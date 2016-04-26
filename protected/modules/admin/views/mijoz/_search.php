<?php
/* @var $this MijozController */
/* @var $model Mijoz */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MijozIsmi'); ?>
		<?php echo $form->textField($model,'MijozIsmi',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MijozEmail'); ?>
		<?php echo $form->textField($model,'MijozEmail',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MijozTelNomer'); ?>
		<?php echo $form->textField($model,'MijozTelNomer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MijozParol'); ?>
		<?php echo $form->textField($model,'MijozParol',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->