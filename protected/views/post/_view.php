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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	<br />
        <article>
        <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo ($data->content); ?>
	<br />
        <article>
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_create')); ?>:</b>
	<?php echo CHtml::encode($data->date_create); ?>
	<br />

<script>
  $('article').readmore({maxHeight: 240});
  </script>
</div>