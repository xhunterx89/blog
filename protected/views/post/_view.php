<?php
/* @var $this PostController */
/* @var $data Post */
?>
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/readmore.js');
?>
<div class="view">
	<h1>
	<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	</h1>
	<div class="form">
	<p class="hint">
		Posted by <?php echo $data->user_id . ' on ' . date('F j, Y',strtotime($data->date_create)); ?>
	</p>
	</div>
	</br>
	<?php echo ($data->content); ?>

<script>
  $('article').readmore({maxHeight: 240});
  </script>
</div>