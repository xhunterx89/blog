<?php foreach($comments as $comment): ?>
<div class="comment">
<!-- <div class="user">
?php echo CHtml::encode($comment->name); ?>:
</div>

<div class="time">
on ?php echo date('F j, Y \a\t h:i a',strtotime($comment->date_create)); ?>
</div> -->
<div class="content">
<?php echo nl2br(CHtml::encode($comment->content)); ?>
</div>
<hr>
</div><!-- comment -->
<?php endforeach; ?>