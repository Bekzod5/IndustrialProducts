<?php
/* @var $this KetegoriyaController */
/* @var $model Ketegoriya */

$this->breadcrumbs=array(
	'Ketegoriyas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ketegoriya', 'url'=>array('index')),
	array('label'=>'Manage Ketegoriya', 'url'=>array('admin')),
);
?>

<h1>Create Ketegoriya</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>