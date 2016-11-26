<?php get_header(); ?>
    

    <div class="col-md-12 col-xs-12" id="music">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">
          <h2 class="yek title-music"><i class="glyphicon glyphicon-zoom-in green"></i> نتایج جستجو برای : <?php echo $_GET['s']; ?> </h2>
          <div class="col-md-12 col-xs-12" id="music-detail">
            <div class="masonry js-masonry" data-masonry-options='{"itemSelector": ".item","gutter":10}'>
               <?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post();
                $searchsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );

                if (get_post_meta( get_the_ID(), "music" , true )) {
                      $music=get_post_meta( get_the_ID(), "music", true );
                      $music=intval($music);
                    }else{
                      $music=0;
                    }

                    if (get_post_meta( get_the_ID(), "podcast" , true )) {
                      $podcast=get_post_meta( get_the_ID(), "podcast", true );
                      $podcast=intval($podcast);
                    }else{
                      $podcast=0;
                    }

                    if (get_post_meta( get_the_ID(), "Album" , true )) {
                      $Album=get_post_meta( get_the_ID(), "Album", true );
                      $Album=intval($Album);
                    }else{
                      $Album=0;
                    }

                    if (get_post_meta( get_the_ID(), "Video" , true )) {
                      $Video=get_post_meta( get_the_ID(), "Video", true );
                      $Video=intval($Video);
                    }else{
                      $Video=0;
                    }

                ?> 

                <div class="item">
                    <a href="<?php the_permalink() ?>"><img class="img-responsive" src="<?= $searchsrc[0]; ?>"></a>
                    <div class="<?php 
                          if ($podcast==1) {
                            echo "podcast-info";
                          }elseif ($music==1 || $Album==1) {
                            echo "music-info";
                          }elseif ($Video==1) {
                            echo "video-info";
                          }

                      ?>">
                    <h4 class="yek podcast-inf"><?php if($music==1){ echo "موسیقی"; }
                         elseif($podcast==1){ echo "پادکست"; }
                          elseif($Album==1){
                                echo "آلبوم";;
                              }
                          elseif($Video==1){
                                echo "ویدیو";;
                              }
                              ?>
                     <i class="<?php if($music==1){ echo "glyphicon glyphicon-music"; }
                            elseif($podcast==1){ echo "fa fa-microphone"; }
                              elseif($Album==1){
                                echo "glyphicon glyphicon-folder-open";
                              }
                              elseif($Video==1){
                              echo "glyphicon glyphicon-facetime-video";
                              }
                              ?>"></i></h4>
                    </div>
                    <div class="entry">
                      <a href="<?php the_permalink() ?>"><h2 class="yek podcast-detail-size"><?php the_title();?></h2></a>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
          </div>
        </div>
        <div class="col-md-1 col-xs-0"></div>
        <!---start page-navi ---->
        <div class="col-md-12 col-xs-12" id="pagenavi">
          <div class="col-md-3 col-xs-0"></div>
          <div class="col-md-6 col-xs-12">
          <center><?php wp_pagenavi(); ?></center>
          </div>
          <div class="col-md-3 col-xs-0"></div>

        </div>

    </div>

<?php get_footer(); ?>