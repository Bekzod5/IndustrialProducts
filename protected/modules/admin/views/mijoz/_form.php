<?php
/* @var $this MijozController */
/* @var $model Mijoz */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mijoz-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MijozIsmi'); ?>
		<?php echo $form->textField($model,'MijozIsmi',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'MijozIsmi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MijozEmail'); ?>
		<?php echo $form->textField($model,'MijozEmail',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'MijozEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MijozTelNomer'); ?>
		<?php echo $form->textField($model,'MijozTelNomer'); ?>
		<?php echo $form->error($model,'MijozTelNomer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MijozParol'); ?>
		<?php echo $form->textField($model,'MijozParol',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'MijozParol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->