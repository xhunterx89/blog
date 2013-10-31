<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );
?>

<h1><?php echo $model->username; ?></h1>

<div class="detail-text">
	<?php echo CHtml::image(Yii::app()->baseUrl.'/img'.$model->id,'Image',array('width'=>200,'height'=>200))?>
	<span>

	<h3> <?php echo "Email: {$model->email}"?></h3>

	<h2> <?php echo "Description: {$model->description}"?></h3>

	</span>

	<?php
		if(Yii::app()->user->id == $model->id)
		{
			echo CHtml::button('Update',
			    array(
			        'submit'=>array('update','id'=>$model->id)
			    )
			);
		}
	?>
</div>
