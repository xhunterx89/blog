<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - introduction';
$this->breadcrumbs=array(
	'introduction',
);
?>

<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
<script src='<?php echo Yii::app()->baseUrl; ?>/js/introduction.js'></script> 

<div class="row">
    <div class="row">
        <h2><span class="introduction" id="about">About</span><h2>
            <hr/>
            <div id="about_content">
            	<h6>
                <p>
                    Blog is made by <span class="secondary label">PHP Trainning Team</span>
                </br>
                    It is written in PHP, using <a href="http://www.yiiframework.com/">Yii Framework</a> 
                </p>
                </h6>  
            </div>
    </div>

    <div class="row">
        <h2><span class="introduction" id="contact">Contact</span><h2>                     
        <hr/>
        <div id="contact_content">
            <p style="display: inline">
            	<h6>
                <span style="float:left"><span class="primary label">Blog</span> was developed in a very short time and
                it has not been tested carefully yet.
                <br/>If you have any ideas or found any bugs, please feel free to contact me.  
                You can <a href="mailto:hoang.thi.tuan.dung@framgia.com">send me an email</a>. </span> 
                <br/>
            </h6>
            </p>
        </div>
    </div>
</div>

