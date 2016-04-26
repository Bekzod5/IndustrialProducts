<?php
/* @var $this MijozController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mijozs',
);

$this->menu=array(
	array('label'=>'Create Mijoz', 'url'=>array('create')),
	array('label'=>'Manage Mijoz', 'url'=>array('admin')),
);
?>

<h1>Mijozs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
