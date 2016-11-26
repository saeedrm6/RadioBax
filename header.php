<!DOCTYPE html>
<html lang="en">
  <head>
<script type="text/javascript">

        window.onload = function () {

            document.getElementById("seoh").style.display = 'none';

                        }
    </script>
<link rel="publisher" href="https://plus.google.com/114768518016584969872/posts">
<script type="text/javascript" src="http://s.adnegah.net/adn.js"></script>
    <meta name="samandehi" content="932684313"/>
	<meta name="samandehi" content="471421014"/>
<meta name="google-site-verification" content="ohSPbu5527B8F4g4X89uK-ZshCqnujiLEX7dbuE4NDo" />
<?php if ( is_home() || is_front_page() ) : ?>
  <meta name="keywords" itemprop="keywords" content="دانلود، آهنگ، دانلود آهنگ، غمگین، آهنگ غمگین، شاد، آهنگ شاد، فیلم و سریال، دانلود فیلم و سریال، لینک مستقیم، دانلود لینک مستقیم، دانلود آهنگ با لینک مستقیم">
<?php endif ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom.css">
   <title><?php #wp_title();
                wp_title(); ?></title>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
  </head>
  <body>
  	<div class="container">
    <div class="col-md-5">
    	   <div class="col-md-6 col-xs-12">
               <?php get_search_form(); ?>
         </div>
    	   <div class="col-md-6 col-xs-12 social">
                <ul>
                  <li><a title="facebook" href="http://facebook.com/radiobax.ir"><i class="fa fa-facebook" id="facebook"></i></a></li>
                  <li><a title="twitter" href="http://twitter.com/3aeed_RM6"><i class="fa fa-twitter" id="twitter"></i></a></li>
                  <li><a title="instagram" href="http://instagram.com/radiobax"><i class="fa fa-instagram" id="instagram"></i></a></li>
                  <li><a title="youtube" href="#"><i class="fa fa-youtube" id="youtube"></i></a></li>
                  <li><a title="telegram" href="https://telegram.me/radiobax"><i class="glyphicon glyphicon-send" id="telegram"></i></a></li>
                  
                </ul>

         </div>
    </div>
    <div class="col-md-4 col-xs-12"></div>
    <div class="clearfix visible-xs"></div>
    <div class="col-md-3 col-xs-12">


          <div class="col-md-6 col-xs-6"><i class="glyphicon glyphicon-bell"></i> 

          		<div class="btn-group btn-danger custom1">
  <button class="btn btn-danger btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    5 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu noti dropdown-menu-bordered">
	 <?php
                $my_query = new WP_Query('showposts=5&cat=8');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
                $albumsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );                
                ?>
                      <li><a title="<?php the_title();?>" href="<?php the_permalink() ?>"><?php the_title();?></a></li>
                <?php endwhile; ?>
  </ul>
</div>

          </div>



          <div class="col-md-6 col-xs-6 yek"><i class="glyphicon glyphicon-music"></i> پخش زنده</div>
    </div>
    <div class="clearfix visible-xs"></div>
    <br>
    <div class="col-md-12 col-xs-12 navbarr">
          <div class="col-md-4 col-xs-12 dirltr"><a href="<?php bloginfo('url'); ?>"><img alt="رادیو بکس" src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-responsive"></a></div>
          <div class="col-md-1 col-xs-12"><br></div>
          <div class="col-md-7 col-xs-12 dirrtl">
          <div class="row">

			            <div class="navbar navbar-default navbar-inverse " role="navigation">
			            <div class="navbar-header">
			            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
						     <span class="sr-only">Toggle navigation</span>
						     <span class="icon-bar"></span>
						     <span class="icon-bar"></span>
						     <span class="icon-bar"></span>
						     </button>
						      <a class="navbar-brand" id="Brandd" href="#">منو</a>
			            </div>
			             <div class="collapse navbar-collapse" id="collapse">
                   <nav>
			            <ul class="nav navbar-nav nav-pills nav-stacked custm-nav">
			            <?php
			            	$checkpage=basename($_SERVER['SCRIPT_FILENAME']);
			            ?>
			                <li><a title="خانه" href="<?php bloginfo('url'); ?>"><i class="glyphicon glyphicon-home"></i> خانه</a></li>
			                <li><a title="موسیقی" href="<?php bloginfo('url'); ?>/category/music/"><i class="fa fa-music"></i> موسیقی</a></li>
			                <li><a title="ویدیو" href="<?php bloginfo('url'); ?>/category/video/"><i class="fa fa-video-camera"></i> ویدیو</a></li>
			                <li><a title="پادکست" href="<?php bloginfo('url'); ?>/category/podcast/"><i class="fa fa-microphone"></i> پادکست</a></li>
			                <li><a title="آلبوم" href="<?php bloginfo('url'); ?>/category/Album/"><i class="glyphicon glyphicon-folder-open"></i> آلبوم</a></li>
			                <li><a title="تبلیغات" href="http://radiobax.com/%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA/"><i class="glyphicon glyphicon-usd"></i> تبلیغات</a></li>
			            </ul>
                  </nav>
			            </div>
			            </div>

		  </div>
          </div>
          
    </div>
    <div class="clearfix visible-xs"></div>