<?php
/* @var $this MijozController */
/* @var $model Mijoz */

$this->breadcrumbs=array(
	'Mijozs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mijoz', 'url'=>array('index')),
	array('label'=>'Create Mijoz', 'url'=>array('create')),
	array('label'=>'Update Mijoz', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mijoz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mijoz', 'url'=>array('admin')),
);
?>

<h1>View Mijoz #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'MijozIsmi',
		'MijozEmail',
		'MijozTelNomer',
		'MijozParol',
	),
)); ?>
