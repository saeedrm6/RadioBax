<div class="col-md-12 col-xs-0" id="video-detail">
                <div class="col-md-8 col-xs-12" id="det-mob">
                  <span class="mp3-details">
                  
                  
                  <br>
                  <video class="col-md-12 col-xs-12" poster="<?= $musicsrc[0]; ?>" controls>
                    <source src="<?php echo "$video_play"; ?>" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>

                  
                  <center><div class="col-md-12 col-xs-12" id="download">
                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID(), "MP4_360", true )) { ?>
                      <a href="<?php echo "$video_MP4_360"; ?>"><button class="btn btn-default yek">دانلود <b class="tahoma">MP4 360</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                    <?php } ?>
                    </div>
                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID(), "MP4_480", true )) { ?>
                      <a href="<?php echo "$video_MP4_480"; ?>"><button class="btn btn-default yek">دانلود <b class="tahoma">MP4 480</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                    <?php } ?>
                    </div>
                    <div class="col-md-4 col-xs-12">
                    <?php if (get_post_meta( get_the_ID(), "MP4_720", true )) { ?>
                      <a href="<?php echo "$video_MP4_720"; ?>"><button class="btn btn-default yek">دانلود <b class="tahoma">MP4 720</b> <i class="glyphicon glyphicon-download-alt"></i></button></a>
                    <?php } ?>
                    </div>
                  </div> </center>

                  </span>
                </div>

                <div class="col-md-4 col-xs-12" id="cover">
                      <span class="cover-img video-inf">
                      <ul id="song-inf">
                    <li class="rmp"><i class="glyphicon glyphicon-facetime-video" id="playy-v"></i></li>
                    <li class="rmp"><h2 class="yek playyy-v"><?php echo "$song_title"; ?></h2><ul>
                      <li class="zrp"><h2 class="yek playyyy"><?php echo "$song_Artist"; ?></h2></li></ul>
                    </li>

                  </ul>
                  <br>
                  <ul id="song-det">
                    <li>کارگردان : <?php echo "$video_director"; ?></li>
                    <li>تدوین : <?php echo "$video_edit"; ?></li>                    
                    <li>تاریخ انتشار : <?php the_time('m-d-y') ?></li>
                  </ul>
                      </span>
                </div>
           
              </div>