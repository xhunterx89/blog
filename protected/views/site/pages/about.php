<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - introduction';
$this->breadcrumbs=array(
	'introduction',
);
?>

<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
<script src='<?php echo Yii::app()->baseUrl; ?>/js/introduction.js'></script> 

<div id="sidebar2" class="sidebar">
<div class='widget' style='height: 250px'>
    <h3>About</h3>
        <ul id='subscription'>
            <li>
                <p>
                    Blog is made by <span class="secondary label">PHP Trainning Team.</span>
                </br>
                    It is written in PHP, using <a href="http://www.yiiframework.com/">Yii Framework.</a> 
                </p>
            </li>
        </ul>
    <h3>Contact</h3>
        <ul id='subscription'>
            <li>
                <p style="display: inline">
                    Blog was developed in a very short time andit has not been tested carefully yet.
                    <br/>If you have any ideas or found any bugs, please feel free to contact me.  
                    You can <a href="mailto:hoang.thi.tuan.dung@framgia.com">send me an email</a>. </span> 
                    <br/>
                </p>
            </li>
        </ul>
</div>
</div>