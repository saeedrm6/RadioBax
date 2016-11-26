<?php get_header(); ?>
<?php $checkpage='index.php'; ?>
    <div class="col-mmm-12 col-xss-12" id="myslider">
      
      <?php #masterslider(2); 
        putRevSlider("home");
       ?>

<?php $GLOBALS[ 'index_check' ] = 1 ?>
      <!--  1140
500

1140
    -->
    </div>
    <div class="col-md-12 col-xs-12" id="ads">

            <?php
                $my_query = new WP_Query('showposts=5&cat=5');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;?>

              <div class="col-md-12 col-xs-12">
              <?php 
              $adssrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );  ?>
               <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><img src="<?= $adssrc[0]; ?>" alt="<?php the_title();?>" class="img-responsive"></a>
               <div class="ads-detail"><a href="<?php the_permalink() ?>"><h3 class="yek"><?php the_title();?></h3></a></div>
              </div>
              <?php endwhile; ?>

	      <div class="col-md-12 col-xs-12">          
               <a target="_blank" href="http://1RAPFAR30.COM/"><img src="http://radiobax.com/wp-content/themes/radio-bax2016/images/RAPFAR30.gif" class="img-responsive"></a>
               <div class="ads-detail"><a target="_blank" href="http://1RAPFAR30.COM/"><h3 class="yek">رپ فار30</h3></a></div>
              </div>

	      <div class="col-md-12 col-xs-12">          
               <a href="http://radiobax.com/%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA/"><img src="http://radiobax.com/wp-content/uploads/2016/03/ads.png" class="img-responsive"></a>
               <div class="ads-detail"><a href="http://radiobax.com/%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA/"><h3 class="yek">تبلیغات</h3></a></div>
              </div>

              


		<div class="col-md-12 col-xs-12">
			<center><script type="text/javascript">adn(728,90);</script></center>
			
		</div>

              
    </div>
    <div class="col-md-12 col-xs-12" id="podcast">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
          <h2 class="yek pod-vid-title"><i class="fa fa-microphone"></i> پادکست</h2>
          <div class="col-md-12 col-xs-12" id="podcast-detail"> <!--shoro podcast-->
              <div class="masonry js-masonry" data-masonry-options='{"itemSelector": ".item","gutter":10}'>
                  
                <?php
                $my_query = new WP_Query('showposts=4&cat=4');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
                $podsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
                ?>

                  <div class="item">
                    <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><img class="img-responsive" src="<?= $podsrc[0]; ?>" alt="<?php the_title();?>"></a>
                    <div class="podcast-info">
                    <h4 class="yek podcast-inf">پادکست <i class="fa fa-microphone"></i></h4>
                    </div>
                    <div class="entry">
                      <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><h2 class="yek podcast-detail-size"><?php the_title();?></h2></a>
                    </div>
                  </div>
                <?php endwhile; ?>

                
          </div>
        </div>
        <div class="col-md-1 col-xs-0"></div>
    </div>
    </div>
    <div class="col-md-12 col-xs-12" id="music">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
          <h2 class="yek title-music"><i class="fa fa-music"></i> موسیقی</h2>
          <div class="col-md-12 col-xs-12" id="music-detail">
            <div class="masonry js-masonry" data-masonry-options='{"itemSelector": ".item","gutter":10}'>
               <?php
                $my_query = new WP_Query('showposts=28&cat=6');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
                $musicsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );                
                ?> 

                <div class="item">
                    <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><img class="img-responsive" src="<?= $musicsrc[0]; ?>" alt="<?php the_title();?>"></a>
                    <div class="music-info">
                    <h4 class="yek podcast-inf">موسیقی <i class="fa fa-music"></i></h4>
                    </div>
                    <div class="entry">
                      <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><h2 class="yek podcast-detail-size"><?php the_title();?></h2></a>
                    </div>
                  </div>

                <?php endwhile; ?>

                
                
            </div>
          </div>
          <h2 class="yek title-music"><i class="glyphicon glyphicon-folder-open"></i> آلبوم</h2>
          <div class="col-md-12 col-xs-12" id="music-detail">
            <div class="masonry js-masonry" data-masonry-options='{"itemSelector": ".item","gutter":10}'>
                <?php
                $my_query = new WP_Query('showposts=8&cat=2');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
                $albumsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );                
                ?>

                <div class="item">
                    <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><img class="img-responsive" alt="<?php the_title();?>" src="<?= $albumsrc[0]; ?>"></a>
                    <div class="music-info">
                    <h4 class="yek podcast-inf">آلبوم <i class="glyphicon glyphicon-folder-open"></i></h4>
                    </div>
                    <div class="entry">
                      <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><h2 class="yek podcast-detail-size"><?php the_title();?></h2></a>
                    </div>
                  </div>
                <?php endwhile; ?>
                                 
            </div>
          </div>
        </div>
        <div class="col-md-1 col-xs-0"></div>
      

    </div>
    <div class="col-md-12 col-xs-12" id="video">
      <div class="col-md-1 col-xs-0"></div>
      <div class="col-md-10 col-xs-12">
          <h2 class="yek pod-vid-title"><i class="fa fa-video-camera"></i> ویدیو</h2>
          <div class="col-md-12 col-xs-12" id="video-detail">
              <div class="masonry js-masonry" data-masonry-options='{"itemSelector": ".item","gutter":10}'>
                
                <?php
                $my_query = new WP_Query('showposts=4&cat=7');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;
                $videosrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );                
                ?>

                <div class="item">
                    <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><img alt="<?php the_title();?>" class="img-responsive" src="<?= $videosrc[0]; ?>"></a>
                    <div class="video-info">
                    <h4 class="yek podcast-inf">ویدیو <i class="fa fa-video-camera"></i></h4>
                    </div>
                    <div class="entry">
                      <a title="<?php the_title();?>" href="<?php the_permalink() ?>"><h2 class="yek podcast-detail-size"><?php the_title();?></h2></a>
                    </div>
                  </div>

                <?php endwhile; ?>

                                   

              </div>

          </div>
      </div>
      <div class="col-md-1 col-xs-0"></div>
    </div>
<?php get_footer(); ?>