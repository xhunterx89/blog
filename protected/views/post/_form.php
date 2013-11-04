<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>53,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
                <?php $this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
                    'model'=>$model,                # Data-Model (form model)
                    'attribute'=>'content',         # Attribute in the Data-Model
                    "config" => array(
                    "height" => "200px",
                    "width" => "95%",
                    "toolbar" => "Full",
                    ),
                    'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
                                                    # Path to ckeditor.php
                    'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
                                                    # Relative Path to the Editor (from Web-Root)
                    'css' => Yii::app()->baseUrl.'/css/index.css',
                                                    # Additional Parameters
                ) ); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->