<div class="col-md-1 col-xs-0"></div>
              <div class="col-md-10 col-xs-0" id="music-detail"> <!---START whilepost MUSIC ---->
              
                <div class="col-md-8 col-xs-12" id="det-mob">
                  <span class="mp3-details">
                  <ul id="song-inf">
                    <li class="rmp"><i class="<?php if($music==1){ echo "glyphicon glyphicon-music"; }
                            elseif($podcast==1){ echo "fa fa-microphone"; }
                              elseif($Album==1){
                                echo "glyphicon glyphicon-folder-open";;
                              }
                              ?>

                      " id="playy"></i></li>
                    <li class="rmp"><h2 class="yek playyy"><?php echo "$song_title"; ?></h2><ul>
                      <li class="zrp"><h2 class="yek playyyy"><?php echo "$song_Artist"; ?></h2></li></ul>
                    </li>

                  </ul>
                  <br>
                  <ul id="song-det">
                    <li>موسیقی : <?php  echo "$song_beat"; ?></li>
                    <li>مدیریت : <?php echo "$song_Arang";  ?></li>
                    <li>شعر : <?php  echo "$song_poem"; ?></li>
                    <li>میکس : <?php  echo "$song_mix"; ?></li>
                    <li>تاریخ انتشار : <?php the_time('y/m/d') ?></li>
                    <li><h1 id="seoh" ><a href="<?php the_permalink() ?>" title="<?php the_content(); ?>" rel="bookmark"><?php the_content(); ?></a></h1></li>
                  </ul>
                  <br>
                  <audio controls class="col-xs-12" id="myplayer">
                    <source src="<?php echo "$song_MP3_128"; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                  <center><div class="col-md-12 col-xs-12" id="download">

                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID(), "MP3_128", true )) { ?>                   
                      <a href="<?php echo "$song_MP3_128"; ?>"><button class="btn btn-default yek">دانلود <b class="tahoma">MP3 128</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                    <?php } ?>
                    </div>

                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID() , "MP3_320", true ) != "" ) { ?> 
                      <a href="<?php echo "$song_MP3_320"; ?>"><button class="btn btn-default yek">دانلود <b class="tahoma">MP3 320</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                    <?php } ?>
                    </div>

                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID() , "zip", true ) != "" ) { ?>
                      <a href="<?php echo "$song_zip"; ?>"><button class="btn btn-default yek zip">دانلود <b class="tahoma">ZIP</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                      <?php } ?>
                    </div>
                  </div> </center>

                  </span>
                </div>

                <div class="col-md-4 col-xs-12" id="cover">
                      <span class="cover-img">
                      <center><a href="<?php the_permalink() ?>" title="<?php the_content(); ?>"><img alt="<?php the_content(); ?>" class="img-responsive" src="<?= $musicsrc[0]; ?>"></a></center>
                      <h4 class="yek podcast-inf eyesigh"><?php if(function_exists('the_views')) { the_views(); } ?> <i class="glyphicon glyphicon-eye-open"></i></h4>
                      <center><ul class="star">
                      <?php 
                        $_star_off=5-$song_Rate;
                        for ($i=0; $i < $_star_off ; $i++) { ?>
                        <li><img src="<?php bloginfo('template_url'); ?>/images/rating-off.png"></li>
                      <?php } ?>

                      <?php for ($i=0; $i < $song_Rate ; $i++) { ?>
                        <li><img src="<?php bloginfo('template_url'); ?>/images/rating-on.png"></li>
                      <?php } ?>
                      
                        
                      
                      </ul></center>
                      </span>
                </div>
              
              </div>  <!---End whilepost MUSIC ---->
              <div class="col-md-1 col-xs-0"></div>