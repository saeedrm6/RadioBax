<?php
  
  if (isset($GLOBALS[ 'index_check' ])){
    if ($GLOBALS[ 'index_check' ]==1) {
      $GLOBALS[ 'index_result' ] = 1;
    }else{
      $GLOBALS[ 'index_result' ] = 0;
    }
  }

?>
    <div class="col-xss-12 col-mmm-12" id="footer">
      <img src="<?php bloginfo('template_url'); ?>/images/zakhara.jpg" class="img-responsive">
      <div class="col-md-8 col-xs-12 col-md-push-4">
      <ul>
        <li><a href="http://radiobax.com/%D8%AE%D9%88%D8%A7%D9%86%D9%86%D8%AF%DA%AF%D8%A7%D9%86/">خوانندگان</a></li>
        <li><a href="http://radiobax.com/%D9%87%D9%85%DA%A9%D8%A7%D8%B1%DB%8C-%D8%A8%D8%A7-%D8%B1%D8%A7%D8%AF%DB%8C%D9%88-%D8%A8%DA%A9%D8%B3/">همکاری با رادیو بکس</a></li>
        <li><a href="http://radiobax.com/%D8%AA%D9%85%D8%A7%D8%B3-%D8%A8%D8%A7-%D9%85%D8%A7/">تماس با ما</a></li>
        <li><a href="http://radiobax.com/%D8%AA%D8%A8%D9%84%DB%8C%D8%BA%D8%A7%D8%AA/">تبلیغات</a></li>
        <li><a href="http://radiobax.com/%D8%AF%D8%B1%D8%A8%D8%A7%D8%B1%D9%87-%D9%85%D8%A7/">درباره ما</a></li>
      </ul>
      </div>
      
      <div class="col-md-4 col-xs-0 col-md-pull-8 visible-md visible-lg">
      <a style="color:#fafafa;" href="http://RahimiManesh.com"><h4 class="yek saeed">طراحی و توسعه :‌ تیم رادیو بکس</h4></a>
      </div>
      <br><hr id="hrr">
      
      <div class="col-md-4 col-xs-12">
        <h4 class="yek">ما را دنبال کنید</h4>
        <div class="social">
          <ul>
                  <li><a title="facebook" href="http://facebook.com/radiobax.ir"><i class="fa fa-facebook" id="facebook"></i></a></li>
                  <li><a title="twitter" href="http://twitter.com/3aeed_RM6"><i class="fa fa-twitter" id="twitter"></i></a></li>
                  <li><a title="instagram" href="http://instagram.com/radiobax"><i class="fa fa-instagram" id="instagram"></i></a></li>
                  <li><a title="youtube" href="#"><i class="fa fa-youtube" id="youtube"></i></a></li>
                  <li><a title="telegram" href="https://telegram.me/radiobax"><i class="glyphicon glyphicon-send" id="telegram"></i></a></li>
                  
                </ul>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-7 col-xs-12">
        <?php if ($GLOBALS[ 'index_result' ]==1) {
         ?>
        <h1 class="yek" style="text-shadow:1px 1px #000;"><?php bloginfo('name'); ?></h1>
        <?php
          }else{
            ?>
        <h2 class="yek" style="text-shadow:1px 1px #000;"><?php bloginfo('name'); ?></h1>    
        <?php  } ?>
        <p id="gavanin">کلیه آثار منتشر شده در این سایت تابع قوانین جمهوری اسلامی ایران و دارای مجوز رسمی از وزارت ارشاد میباشند.</p>      <br>
      </div>
      <br><br><br><br>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>