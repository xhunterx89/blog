<?php foreach($comments as $comment):?>
	
<div class="comment-container">
<div class="comment-author">
<?php echo CHtml::encode($comment->name); ?> says:
</div>

<div class="">
on <?php echo date('F j, Y \a\t h:i a',strtotime($comment->date_create)); ?>
</div>
<?php if ($comment->spam<5){ ?>
	<div class="comment-data">
		<?php echo nl2br(CHtml::encode($comment->content)); ?>
	</div>
	<div>
		<?php echo CHtml::link('Spam '.$comment->spam,array('post/CommentSpam','id'=>$comment->id));?>
	</div>

<?php }else { ?>
	<?php Yii::app()->clientScript->registerScript('toggler','$("#optional-link").bind("click",function(){$("#optional-text").toggle();})')?>

	<?php echo CHtml::link('Show/hide comment spam','#',array('id'=>'optional-link')); ?>
	<div id="optional-text" style="display: none" >
    	<div class="comment-data">
			<?php echo nl2br(CHtml::encode($comment->content)); ?>
		</div>
		<div>
			<?php echo CHtml::link('Spam '.$comment->spam,array('post/CommentSpam','id'=>$comment->id));?>
		</div>
	</div>
	<?php } ?>
<hr>
</div>

<!-- comment -->
<?php endforeach; ?>