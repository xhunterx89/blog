<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($models != null): ?>
<ul>
    <?php foreach($models as $model): ?>
    <li><?php echo CHtml::link(CHtml::encode(substr(strip_tags($model->content), 0, 50)), 
        array('comment/view', 'id'=>$model->id)); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>