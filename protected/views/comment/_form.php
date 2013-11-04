<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'enableAjaxValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>
	<div class="row-fluid">
        <form>
           <div class="row">
				<?php echo $form->labelEx($model,'name'); ?>
				<?php echo $form->textField($model,'name'); ?>
				<?php echo $form->error($model,'name'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'content'); ?>
				<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'content'); ?>
			</div>
			<div class="row buttons">
				<?php echo CHtml::submitButton('Post comment'); ?>
			</div>
          </form>
          </div><!-- row-fluid -->
<?php $this->endWidget(); ?>