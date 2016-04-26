<?php
/* @var $this KetegoriyaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ketegoriyas',
);

$this->menu=array(
	array('label'=>'Create Ketegoriya', 'url'=>array('create')),
	array('label'=>'Manage Ketegoriya', 'url'=>array('admin')),
);
?>

<h1>Ketegoriyas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
