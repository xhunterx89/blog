<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo Yii::app()->name ?></title>
<meta name="generator" content="WordPress 3.1" />
<!-- 4 stats -->

<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/ie.css" type="text/css" media="screen" />
<![endif]-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<script src="http://zkiwi.com/libs/js/snow.js" type="text/javascript"></script>
<script type="text/javascript">
   createSnow('http://zkiwi.com/libs/imgs/snow/', 30);
</script

</head>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>

<body>
<div id="background">
<div id="header">

<div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/post/index')),
				array('label'=>'Introduction', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Signup', 'url'=>array('/user/create'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Profile', 'url'=>array('/user/view&id='.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div>

<div id="logo">
                  <a href="<?php echo Yii::app()->request->baseUrl ?>" title="<?php echo Yii::app()->name ?>">
<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png"/></a>
         
</div><!--END LOGO-->


	
</div><!--END HEADER-->


<div id="container">

	<div id="content">
			<?php echo $content ?>
		<?php /*
				<div id="post-2" class="post">
			<h1 class="post-title">Sample Page</h1>
			<div class="post-content">
				<p>This is an example page. It&#8217;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
<blockquote><p>Hi there! I&#8217;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin&#8217; caught in the rain.)</p></blockquote>
<p>&#8230;or something like this:</p>
<blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
<p>As a new WordPress user, you should go to <a href="http://angrybirds.themesnack.net/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
			</div>
		</div><!-- .post -->
		*/ ?>

	</div><!-- #content -->

<div id="sidebar" class="sidebar">

<embed src=" http://d.violet.vn/uploads/resources/495/0.Lam_dong_ho_Flash.swf?TimeZone=VietNam_Hanoi&Place=&"  width="300" height="180" wmode="transparent" type="application/x-shockwave-flash">

<div class='widget' style='height: 250px'>
<h3>Blog Subscription</h3>
<ul id='subscription'>

      <li>
        
        <a href="http://twitter.com/">
<img alt="Twitter" src="<?php echo Yii::app()->theme->baseUrl ?>/images/twitter.png"/></a>
        <h4><a href="http://twitter.com/princesslove_90">Follow me</a></h4>
        <p>You can follow my updates on Twitter</p>

      </li>

      <li>
        
        <a href="#">
<img alt="Feed" src="<?php echo Yii::app()->theme->baseUrl ?>/images/rss.png"/></a>
        <h4><a href="#">Posts RSS</a></h4>
        <p>Read my full posts on your favorite feed reader</p>
      </li>
<li>
        
        <a href="http://www.facebook.com">
<img alt="Facebook" src="<?php echo Yii::app()->theme->baseUrl ?>/images/facebook.png"/></a>
        <h4><a href="http://www.facebook.com/tuandung.hoangthi">Facebook</a></h4>
        <p>Become a fan of blog on Facebook</p>
      </li>
    </ul>
</div>

<div class="widget">
<h3>Search this blog</h3>
<div id="searchform">
<?php echo CHtml::form(Yii::app()->createUrl('post/search'), 'get') ?>
            <?php echo CHtml::textField('search_key','',array('placeholder' => 'Search')); ?>
            <?php echo CHtml::submitButton('Go'); ?>
<?php echo CHtml::endForm() ?>
</div>
</div>

<div class="widget">
<h3>Hot Blog</h3>
<ul> 
	<li class="cat-item cat-item-3"><a href="http://blog.khoctham.us/index.php">Blog 1</a></li>
	<li class="cat-item cat-item-5"><a href="http://haydanhthoigian.net/">Blog 2</a></li>
	<li class="cat-item cat-item-6"><a href="http://vnbloghay.blogspot.com/2013/09/day-trau-trong-bao.html">Blog 3</a></li>
</ul>
</div>

</div><!--END SIDEBAR-->
<div style="clear: both"></div>
</div><!--END CONTAINER-->
<div id="footer-wrapper">
<div id="footer">

<div class="footerbox" id="footerbox1">
<h4>Recent Posts</h4>
<ul>
	<?php $this->widget('RecentPostWidget'); ?>
</ul>
</div>

<div class="footerbox" id="footerbox2">
<h4>Recent Comments</h4>

<ul>
	<?php $this->widget('RecentCommentWidget'); ?>
</ul>
</div>


<div style="clear: both"></div>

</div><!--END FOOTER-->
</div><!--END FOOTER-WRAPPER--><div id="credit-wrapper">
<div id="credit">
Copyright &copy; <?php echo date('Y'); ?> by PHP Trainning Team.<br/>
		All Rights Reserved.<br/>
</div>
</div></body>
</html>
