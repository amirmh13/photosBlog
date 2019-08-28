<?php /* Template Name: Services */ ?>


<?php get_header(); ?>

<body class="<?php if( get_locale() == 'fa_IR') echo 'persian' ?>">

  <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <?php include('inc/navbar.php') ?>

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
            <a class="image-gradient" href="<?php bloginfo('url')?>/products/dishes">
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
            <a class="image-gradient" href="<?php bloginfo('url')?>/products/carpets">
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
            <a class="image-gradient" href="<?php bloginfo('url')?>/products/restaurants">
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

    <!-- <div class="site-section" data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 " data-aos="fade-up">
                <h2 class="site-section-heading text-center">Other Services</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="100">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-camera display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Camera</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$29</strong></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="200">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-picture display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Wedding Photography</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$46</strong></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="300">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-sheep display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Animal</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$24</strong></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="400">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-frame display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Portrait</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$40</strong></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="500">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-eiffel-tower display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Travel</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$35</strong></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5" data-aos="fade" data-aos-delay="600">
                <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                  <span class="icon flaticon-video-play display-3 text-primary mb-4 d-block"></span>
                  <h3 class="text-black h4">Video Editing</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                    debitis.</p>
                  <p><strong class="font-weight-bold text-primary">$15</strong></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->


    <?php get_footer(); ?>

</body>

</html>