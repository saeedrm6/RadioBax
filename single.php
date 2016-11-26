<?php get_header(); ?>
<div class="col-md-12 col-xs-12" id="ads">

            
	      <div class="col-md-12 col-xs-12" style="display:none;">          
               <a target="_blank" href="http://1.RAPFAR30.COM/"><img src="http://radiobax.com/wp-content/themes/radio-bax2016/images/RAPFAR30.gif" class="img-responsive"></a>
               <div class="ads-detail"><a href="http://radiobax.com/%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA/"><h3 class="yek">رپ فار30</h3></a></div>
              </div>


              
    </div>    
    
    
    <div class="col-md-12 col-xs-12" id="music2">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-10 col-xs-12">

              <?php while(have_posts()) : the_post();


                    $musicsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );


                    endwhile; ?>
              <?php      
                    if (get_post_meta( get_the_ID(), "Artist" , true )) {
                      $song_Artist=get_post_meta( get_the_ID(), "Artist", true );
                    }else{
                      $song_Artist="";
                    }

                    if (get_post_meta( get_the_ID(), "title" , true )) {
                      $song_title=get_post_meta( get_the_ID(), "title", true );
                    }else{
                      $song_title="";
                    }

                    if (get_post_meta( get_the_ID(), "Rate" , true )) {
                      $song_Rate=get_post_meta( get_the_ID(), "Rate", true );
                    }else{
                      $song_Rate="";
                    }

                    if (get_post_meta( get_the_ID(), "MP3_128" , true )) {
                      $song_MP3_128=get_post_meta( get_the_ID(), "MP3_128", true );
                    }else{
                      $song_MP3_128="";
                    }

                    if (get_post_meta( get_the_ID(), "MP3_320" , true )) {
                      $song_MP3_320=get_post_meta( get_the_ID(), "MP3_320", true );
                    }else{
                      $song_MP3_320="";
                    }

                    if (get_post_meta( get_the_ID(), "zip" , true )) {
                      $song_zip=get_post_meta( get_the_ID(), "zip", true );
                    }else{
                      $song_zip="";
                    }

                    if (get_post_meta( get_the_ID(), "poem" , true )) {
                      $song_poem=get_post_meta( get_the_ID(), "poem", true );
                    }else{
                      $song_poem="";
                    }

                    if (get_post_meta( get_the_ID(), "mix" , true )) {
                      $song_mix=get_post_meta( get_the_ID(), "mix", true );
                    }else{
                      $song_mix="";
                    }

                    if (get_post_meta( get_the_ID(), "Arang" , true )) {
                      $song_Arang=get_post_meta( get_the_ID(), "Arang", true );
                    }else{
                      $song_Arang="";
                    }

                    if (get_post_meta( get_the_ID(), "beat" , true )) {
                      $song_beat=get_post_meta( get_the_ID(), "beat", true );
                    }else{
                      $song_beat="";
                    }

                    if (get_post_meta( get_the_ID(), "director" , true )) {
                      $video_director=get_post_meta( get_the_ID(), "director", true );
                    }else{
                      $video_director="";
                    }

                    if (get_post_meta( get_the_ID(), "Edit" , true )) {
                      $video_edit=get_post_meta( get_the_ID(), "Edit", true );
                    }else{
                      $video_edit="";
                    }

                    if (get_post_meta( get_the_ID(), "Variety" , true )) {
                      $Variety=get_post_meta( get_the_ID(), "Variety", true );
                      $Variety=intval($Variety);
                    }else{
                      $Variety=0;
                    }

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

                    if (get_post_meta( get_the_ID(), "MP4_360" , true )) {
                      $video_MP4_360=get_post_meta( get_the_ID(), "MP4_360", true );
                    }else{
                      $video_MP4_360="";
                    }

                    if (get_post_meta( get_the_ID(), "MP4_480" , true )) {
                      $video_MP4_480=get_post_meta( get_the_ID(), "MP4_480", true );
                    }else{
                      $video_MP4_480="";
                    }

                    if (get_post_meta( get_the_ID(), "MP4_720" , true )) {
                      $video_MP4_720=get_post_meta( get_the_ID(), "MP4_720", true );
                    }else{
                      $video_MP4_720="";
                    }

                    if (get_post_meta( get_the_ID(), "video_play" , true )) {
                      $video_play=get_post_meta( get_the_ID(), "video_play", true );
                    }else{
                       $video_play="";
                    }
              ?>

                <?php

                  switch ($Variety) {
                    case 0:{
                      ##shoro Albume-Music-Podcast##
                      include('song.php'); 
                     ##Payan Albume-Music-Podcast##
                      break;
                    }
                    case 1:{
                      ##shoro Video##
                      include('video.php'); 
                     ##Payan Video##
                      break;                    
                    }
                    default:
                      include('song.php'); 
                      break;
                  }



                ?>
                

              


            


        </div>
        <div class="col-md-1 col-xs-0"></div>
      

    </div>

    
<?php get_footer(); ?>
