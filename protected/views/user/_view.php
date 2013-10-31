<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<?php if(Yii::app()->user->id == $data->id) { ?>
	<?php echo CHtml::image(Yii::app()->baseUrl.'/img'.$data->id,'Image',array('width'=>200,'height'=>200))?>
	
	</br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<?php } ?>

</div>