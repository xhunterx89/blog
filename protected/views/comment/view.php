<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->name,
);

?>

<h1>View Comment</h1>

</br></br>

	
<div class="comment-container">
<div class="comment-author">
<?php echo CHtml::encode($model->name); ?> says:
</div>

<div class="">
on <?php echo date('F j, Y \a\t h:i a',strtotime($model->date_create)); ?>
</div>
</br></br>
<?php if ($model->spam<5){ ?>
	<div class="comment-data">
		<?php echo nl2br(CHtml::encode($model->content)); ?>
	</div>
	<div>
		<?php echo CHtml::link('Spam '.$model->spam,array('post/CommentSpam','id'=>$model->id));?>
	</div>

<?php }else { ?>
	<?php Yii::app()->clientScript->registerScript('toggler','$("#optional-link").bind("click",function(){$("#optional-text").toggle();})')?>

	<?php echo CHtml::link('Show/hide comment spam','#',array('id'=>'optional-link')); ?>
	<div id="optional-text" style="display: none" >
    	<div class="comment-data">
			<?php echo nl2br(CHtml::encode($model->content)); ?>
		</div>
		<div>
			<?php echo CHtml::link('Spam '.$model->spam,array('post/CommentSpam','id'=>$model->id));?>
		</div>
	</div>
	<?php } ?>
<hr>
</div>

