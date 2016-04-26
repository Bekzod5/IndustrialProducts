<?php
/* @var $this KetegoriyaController */
/* @var $model Ketegoriya */

$this->breadcrumbs=array(
	'Ketegoriyas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ketegoriya', 'url'=>array('index')),
	array('label'=>'Create Ketegoriya', 'url'=>array('create')),
	array('label'=>'Update Ketegoriya', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ketegoriya', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ketegoriya', 'url'=>array('admin')),
);
?>

<h1>View Ketegoriya #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomi',
		'parent_id',
	),
)); ?>
