<?php
/* @var $this CommentController */
/* @var $data Comment */
?>
<div class="row-fluid comment">
    <div class="span12 ">
                <a class="pull-left" href="#">
                  <img class="media-object" src="">
                </a>
                <strong class="media-heading"><?php echo CHtml::encode($data->name); ?> say:</strong>
                <br />
                <?php echo CHtml::encode($data->content); ?>
                <b><?php echo CHtml::encode($data->getAttributeLabel('date_create')); ?>:</b>
				<?php echo CHtml::encode($data->date_create); ?>
				<br />
				<b><?php echo CHtml::encode($data->getAttributeLabel('spam')); ?>:</b>
				<?php echo CHtml::encode($data->spam); ?>
	<br />
     	</div><!-- span12 -->
     </div><!-- row-fluid -->
	
	


</div>