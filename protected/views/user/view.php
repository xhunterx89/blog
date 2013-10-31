<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->username; ?></h1>

<div class="detail-text">
	<?php echo html_entity_decode(CHtml::image(Yii::app()->baseUrl.'/img'.$model->id,'alt',array('width'=>200,'height'=>200)))?>
	<span>
<!-- 	<h2> <?php echo "Username:"?></h2>
	<h3><?php echo $model->username?></h3>
	</br> -->

	<h2> <?php echo "Email:"?></h2>
	<h3><?php echo $model->email?></h3>

	<h2> <?php echo "Description:"?></h2>
	<h3><?php echo $model->description?></h3>

	</span>
</div>
