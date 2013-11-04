<h1>
<?php echo CHtml::link(CHtml::encode($model->title), array('view', 'id'=>$model->id)); ?>
</h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'title',
		'content:html',
		'date_create',
	),
)); ?-->
  <div class="form">
  <p class="hint">
    Posted by <?php echo $model->user_id . ' on ' . date('F j, Y',strtotime($model->date_create)); ?>
  </p>
  </div>
  </br>
  <?php echo ($model->content); ?>
<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

 if((!Yii::app()->user->isGuest)&&(Yii::app()->user->id==$model->user_id)){
    $this->widget('zii.widgets.CMenu',array(
     'activeCssClass'=>'active',
     'activateParents'=>true,
     'items'=>array(
       array(
         'linkOptions'=>array('id'=>'menuCompany'),
         'itemOptions'=>array('id'=>'itemCompany'),
         'items'=>array(
           array('label'=>'List Post', 'url'=>array('index')),
           array('label'=>'Create Post', 'url'=>array('create')),
           array('label'=>'Update Post', 'url'=>array('update','id'=>$model->id)),
           array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
           array('label'=>'Manage Post', 'url'=>array('admin')),
         ),
       ),
       ),)
   );
 }
?>
<br />
<h2>
	<?php echo $model->commentCount . ' Comment(s)'; ?>
</h2>
<br />
		<?php if($model->commentCount>=1): ?>
			<?php $this->renderPartial('_comments',array(
				'post'=>$model,
				'comments'=>$model->comments,
			)); ?>
		<?php endif; ?>
 <h2>Leave a Comment</h2>
      <?php $this->renderPartial('/comment/_form',array(
        'model'=>$comment,
      )); ?>
