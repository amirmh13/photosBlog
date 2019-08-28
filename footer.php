<div class="py-3 mb-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 d-md-flex justify-content-between align-items-center" data-aos="fade">
            <h2 class="text-black mb-5 mb-md-0 text-center text-md-left"><?php _e('To order products', 'photosBlog') ?>:</h2>
            <div class="text-center text-md-left">
              <a  href="<?php bloginfo('url')?>/contact-us" class="btn btn-danger py-3 px-5 rounded"><?php _e('Order Now', 'photosBlog') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>




    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
              <h3 class="footer-heading mb-4"><?php _e('About Us', 'photosBlog') ?></h3>
              <p>
              <?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. In egestas erat imperdiet sed', 'photosBlog') ?>
              </p>
          </div>
          <div class="col-lg-4 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4"><?php _e('Navigations', 'photosBlog') ?></h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled p-0">
                  <li><a href="<?php bloginfo('url')?>"><?php _e('Home', 'photosBlog') ?></a></li>
                  <li><a href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/products'; else echo '/محصولات'; ?>"><?php _e('Products', 'photosBlog') ?></a></li>
                  <li><a href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/about-us'; else echo '/درباره-ما';?>"><?php _e('About Us', 'photosBlog') ?></a></li>
                  <li><a href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/contact-us'; else echo '/تماس-با-ما';?>"><?php _e('Contact Us', 'photosBlog') ?></a></li>
                </ul>
              </div>
              <!-- <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Me</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Me</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div> -->
            </div>


          </div>

          <div class="col-lg-4 mb-lg-0">
            <h3 class="footer-heading mb-4"><?php _e('Follow Us', 'photosBlog') ?></h3>

            <div>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-telegram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>



          </div>

        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <p>
              amir
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <!-- Copyright &copy;<script data-cfasync="false"
                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart text-danger"
                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

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
  <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('#lightgallery').lightGallery();
    });
  </script>