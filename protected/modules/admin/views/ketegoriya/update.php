<?php
/* @var $this KetegoriyaController */
/* @var $model Ketegoriya */

$this->breadcrumbs=array(
	'Ketegoriyas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ketegoriya', 'url'=>array('index')),
	array('label'=>'Create Ketegoriya', 'url'=>array('create')),
	array('label'=>'View Ketegoriya', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ketegoriya', 'url'=>array('admin')),
);
?>

<h1>Update Ketegoriya <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>