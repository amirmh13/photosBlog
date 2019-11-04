<?php /* Template Name: Contact Us */ ?>


<?php get_header(); ?>

<body class="<?php if( get_locale() == 'fa_IR') echo 'persian' ?>">

  <div class="site-wrap">




    <div class="site-blocks-cover overlay inner-page-cover"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/images/photo_2019-08-26_17-52-55.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1><?php _e('Contact Us', 'photosBlog') ?></h1>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section" data-aos="fade">
      <div class="container-fluid py-5">

        <div class="row justify-content-center">
          <div class="col-md-9">

            <div class="row">
              <div class="col-lg-8 mb-5">
                <?php if( get_locale() == 'fa_IR') dynamic_sidebar('contact-us-form-fa'); else dynamic_sidebar('contact-us-form-en') ?>
              </div>
              <div class="col-lg-4 ml-auto <?php if( get_locale() == 'fa_IR') echo "pt-lg-4" ?>">
                <div class="contact-us-links mb-3 bg-white py-4 px-5">
                  <p class="mb-0 font-weight-bold"><?php _e('Address','photosBlog') ?></p>
                  <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                  <p class="mb-0 font-weight-bold"><?php _e('Phone','photosBlog') ?></p>
                  <p class="mb-4"><a href="tel:+1 232 3235 324">+1 232 3235 324</a></p>

                  <p class="mb-0 font-weight-bold"><?php _e('Email','photosBlog') ?></p>
                  <p class="mb-0"><a href="mailto:handmadetiles95@gmail.com">handmadetiles95@gmail.com</a></p>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




    <?php get_footer(); ?>

</body>

</html>