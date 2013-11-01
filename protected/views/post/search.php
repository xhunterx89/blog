<h1>Search Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		'content',
		'date_create',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
