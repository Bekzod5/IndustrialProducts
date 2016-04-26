<?php
/* @var $this MijozController */
/* @var $model Mijoz */

$this->breadcrumbs=array(
	'Mijozs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mijoz', 'url'=>array('index')),
	array('label'=>'Create Mijoz', 'url'=>array('create')),
	array('label'=>'View Mijoz', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mijoz', 'url'=>array('admin')),
);
?>

<h1>Update Mijoz <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>