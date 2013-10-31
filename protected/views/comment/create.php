<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);
?>
<h3>Leave a Comment</h3>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>