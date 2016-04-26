<?php
/* @var $this MijozController */
/* @var $model Mijoz */

$this->breadcrumbs=array(
	'Mijozs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mijoz', 'url'=>array('index')),
	array('label'=>'Manage Mijoz', 'url'=>array('admin')),
);
?>

<h1>Create Mijoz</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>