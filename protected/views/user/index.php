<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile',
);

// $this->menu=array(
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );
?>

<h1>Profile</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
