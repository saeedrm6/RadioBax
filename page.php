<?php get_header(); ?>
   
    <div class="col-md-12 col-xs-12" id="ads">

            <?php
                $my_query = new WP_Query('showposts=5&cat=5');
                while ($my_query->have_posts()):
                $my_query->the_post();
                $do_not_duplicate = $post->ID;?>

              <div class="col-md-12 col-xs-12">
              <?php 
              $adssrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );  ?>
               <a href="<?php the_permalink() ?>"><img src="<?= $adssrc[0]; ?>" class="img-responsive"></a>
               <div class="ads-detail"><a href="<?php the_permalink() ?>"><h3 class="yek"><?php the_title();?></h3></a></div>
              </div>
              <?php endwhile; ?>

	    


    </div>

    <div class="col-md-12 col-xs-12" id="music">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <h2 class="yek title-music"><i class="glyphicon glyphicon-th"></i> <?php wp_title(); ?></h2>
          <div class="col-md-12 col-xs-12" id="music-detail">
            
            <p><?php the_content(""); ?></p>
            
          </div>
          <?php endwhile; ?>
          <?php endif; ?> 

        </div>
        <div class="col-md-1 col-xs-0"></div>
      

    </div>

<?php get_footer(); ?>