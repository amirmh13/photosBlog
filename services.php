<?php /* Template Name: Services */ ?>


<?php get_header(); ?>

<body class="<?php if( get_locale() == 'fa_IR') echo 'persian' ?>">

  <div class="site-wrap">


   

    <div class="site-blocks-cover overlay inner-page-cover"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/images/photo_2019-08-26_17-52-55.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1><?php _e('Products','photosBlog') ?></h1>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <!-- <div class="row text-center justify-content-center mb-5">
          <div class="col-12 " data-aos="fade-up">
            <h2 class="site-section-heading text-center">My Specialties</h2>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a class="image-gradient" href="<?php echo home_url( $wp->request ); if (get_locale() == 'en_US') echo '/dishes'; else echo '/نمونه-کارهای-بشقاب'; ?>">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/kashi.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3><?php _e('Dish sample','photosBlog') ?></h3>
                <!-- <span>5 photos</!--> 
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a class="image-gradient" href="<?php echo home_url( $wp->request ); if (get_locale() == 'en_US') echo '/carpets'; else echo '/نمونه-کارهای-فرش'; ?>">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/carpet.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3><?php _e('Carpet sample','photosBlog') ?></h3>
                <!-- <span>5 photos</!-->
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <a class="image-gradient" href="<?php echo home_url( $wp->request ); if (get_locale() == 'en_US') echo '/restaurants'; else echo '//نمونه-کارهای-رستوران'; ?>">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/restaurant.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3><?php _e('Restaurent sample','photosBlog') ?></h3>
                <!-- <span>5 photos</!-->
              </div>
            </a>
          </div>


        </div>
      </div>
    </div>

    <?php get_footer(); ?>

</body>

</html>