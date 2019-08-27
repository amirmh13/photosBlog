<?php get_header(); ?>

<body>

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
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="site-block-profile-pic" data-aos="fade" data-aos-delay="200">
      <a href="about.html"><img src="<?php echo get_template_directory_uri() ?>/images/IMG_0002.JPG" alt="Image"></a>
    </div> -->

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6  mb-5">
            <img src="<?php echo get_template_directory_uri() ?>/images/IMG_0002.jpg" alt="Images" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto">
            <h3 class="text-black mb-3"><?php _e('Home', 'photosBlog') ?></h3>
            <p>
              <?php _e('Have you ever tried to have a piece of') ?>
            </p>

            <!-- <p class="mt-5 mb-3">Follow Me</p>
            <p>
              <a href="#" class="pr-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
              <a href="#" class="p-2"><span class="icon-facebook"></span></a>
            </p> -->
          </div>
        </div>
      </div>


      <div class="site-section border-bottom">
        <div class="container">
          <div class="row text-center justify-content-center mb-5">
            <div class="col-md-7" data-aos="fade-up">
              <h2>Our samples</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <a class="image-gradient" href="single.html">
                <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/images/kashi.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3>Dish sample</h3>
                  <span>5 photos</span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <a class="image-gradient" href="single.html">
                <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/images/carpet.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3>Carpet sample</h3>
                  <span>5 photos</span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <a class="image-gradient" href="single.html">
                <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/images/restaurant.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3>Restaurent sample</h3>
                  <span>5 photos</span>
                </div>
              </a>
            </div>


          </div>
        </div>
      </div>

      <div class="py-5 site-block-testimonial"
        style="background-image: url('<?php echo get_template_directory_uri() ?>/images/top-section-bg.JPG');"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row block-13 mb-5">
            <div class="col-md-12 text-center" data-aos="fade">
              <div class="nonloop-block-13 owl-carousel">
                <div class="block-testimony">
                  <img src="<?php echo get_template_directory_uri() ?>/images/person_1.jpg" alt="Image"
                    class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat,
                    sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed,
                    assumenda.&rdquo;</p>
                  <p class="small">&mdash; Marrygrace Woodland</p>
                </div>
                <div class="block-testimony">
                  <img src="<?php echo get_template_directory_uri() ?>/images/person_2.jpg" alt="Image"
                    class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat,
                    sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed,
                    assumenda.&rdquo;</p>
                  <p class="small">&mdash; Jean Doe</p>
                </div>
                <div class="block-testimony">
                  <img src="<?php echo get_template_directory_uri() ?>/images/person_3.jpg" alt="Image"
                    class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat,
                    sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed,
                    assumenda.&rdquo;</p>
                  <p class="small">&mdash; Ben Smith</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="products" class="site-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Products</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="site-block-half d-lg-flex">
                <div class="image"
                  style="background-image: url('<?php echo get_template_directory_uri() ?>/images/carpet.jpg');"></div>
                <div class="text">
                  <h3>Nature Photography</h3>
                  <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident
                    voluptate
                    tenetur illo.</p>
                </div>
              </div>
              <div class="site-block-half d-lg-flex">
                <div class="image"
                  style="background-image: url('<?php echo get_template_directory_uri() ?>/images/kashi.jpg');"></div>
                <div class="text">
                  <h3>Portrait Photography</h3>
                  <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident
                    voluptate
                    tenetur illo.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="site-block-half d-lg-flex">
                <div class="image"
                  style="background-image: url('<?php echo get_template_directory_uri() ?>/images/IMG_0002.jpg');">
                </div>
                <div class="text">
                  <h3>Wedding Photography</h3>
                  <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident
                    voluptate
                    tenetur illo.</p>
                </div>
              </div>
              <div class="site-block-half d-lg-flex">
                <div class="image"
                  style="background-image: url('<?php echo get_template_directory_uri() ?>/images/top-section-bg.jpg');">
                </div>
                <div class="text">
                  <h3>Food & Drink Photography</h3>
                  <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident
                    voluptate
                    tenetur illo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php get_footer(); ?>


</body>

</html>