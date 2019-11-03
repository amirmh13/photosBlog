
<footer class="site-footer">
  <div class="container px-5 px-md-0">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <span class="d-flex justify-content-center flex-column">
          <a href="<?php bloginfo('url')?>" class="text-white text-center h2">
            <img class="logo__navbar mb-2" height="85px" width="85px"
              src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Rasoulifar Art Gallery">
          </a>
          <h3 class="footer-heading text-center mb-4"><?php _e("Rasouoifar's Art Gallery", 'photosBlog') ?></h3>

          <ul class="list-unstyled d-flex p-0">
            <li><a href="<?php bloginfo('url')?>"><?php _e('Home', 'photosBlog') ?></a></li>
            <li><a
                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/products'; else echo '/محصولات'; ?>"><?php _e('Products', 'photosBlog') ?></a>
            </li>
            <li><a
                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/about-us'; else echo '/درباره-ما';?>"><?php _e('About Us', 'photosBlog') ?></a>
            </li>
            <li><a
                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/contact-us'; else echo '/تماس-با-ما';?>"><?php _e('Contact Us', 'photosBlog') ?></a>
            </li>
          </ul>


          <div class="text-center">
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-telegram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>

        </span>
      </div>
      

    </div>
    <div class="col-md-12 text-center mt-3">
    <!-- <p>
          <div class="footer-title"><?php _e('Address', 'photosBlog') ?>:</div>
          <p class="m-0">tehran</p>
          <div class="footer-title"><?php _e("Email", 'photosBlog') ?>:</div>
          <a href="mailto:handmadetiles95@gmail.com">handmadetiles95@gmail.com</a>
          <div class="footer-title"><?php _e("Phone", 'photosBlog') ?>:</div>
          <a href="tel:555">5555</a>
        </p> -->
      <p>

        Rasoulifar Art Gallery
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script> All rights reserved

      </p>

    </div>
    <div class="col-sm-12 text-center mt-3">
      <p>
        This website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a
          href="http://sarooj.org" target="_blank">Sarooj.org</a>
      </p>
    </div>

  </div>
</footer>




</div>

<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/js/picturefill.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/lightgallery-all.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.mousewheel.min.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/main.js?v=<?php echo time(); ?>"></script>

<script>
  $(document).ready(function () {
    $('#lightgallery').lightGallery();
  });
</script>