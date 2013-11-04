<?php Yii::app()->clientScript->registerScript('toggler',
	'$("[class^=toggle-item]").hide();
	$("[class^=link]").click(function() {
    $("span", this).text(function(i, txt) {
        return txt === "Show" ? "Show" : "Hide";
    }).parent().next().toggle();
	});')?>
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
	

	<?php echo CHtml::link('<span>Show</span> comment spam','#',array('class'=>'link-'.$comment->id)); ?>
	<div class="toggle-item-link<?php echo $comment->id;?>">
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