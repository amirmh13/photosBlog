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


    <header class="site-navbar py-3" role="banner">




      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="<?php bloginfo('url')?>" class="text-black h2 mb-0">fotograp<span
                  class="text-primary">.</span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="has-children">
                  <a href="single.html">Photography</a>
                  <ul class="dropdown">
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Portrait</a></li>
                    <li><a href="#">Wedding</a></li>
                    <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/hero_bg_3.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>I'm Ben Botsford a Professional Photographer Live in Oakland</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-block-profile-pic" data-aos="fade" data-aos-delay="200">
      <a href="about.html"><img src="<?php echo get_template_directory_uri() ?>/images/person_7.jpg" alt="Image"></a>
    </div>

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">My Specialties</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="site-block-half d-lg-flex">
              <div class="image" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/img_1.jpg');"></div>
              <div class="text">
                <h3>Nature Photography</h3>
                <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident voluptate
                  tenetur illo.</p>
              </div>
            </div>
            <div class="site-block-half d-lg-flex">
              <div class="image" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/img_3.jpg');"></div>
              <div class="text">
                <h3>Portrait Photography</h3>
                <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident voluptate
                  tenetur illo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="site-block-half d-lg-flex">
              <div class="image" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/img_2.jpg');"></div>
              <div class="text">
                <h3>Wedding Photography</h3>
                <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident voluptate
                  tenetur illo.</p>
              </div>
            </div>
            <div class="site-block-half d-lg-flex">
              <div class="image" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/img_4.jpg');"></div>
              <div class="text">
                <h3>Food & Drink Photography</h3>
                <p>Sunt nesciunt repellat molestias vitae nostrum aliquid laudantium quo voluptatem provident voluptate
                  tenetur illo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 site-block-testimonial" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/hero_bg_1.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row block-13 mb-5">
          <div class="col-md-12 text-center" data-aos="fade">
            <div class="nonloop-block-13 owl-carousel">
              <div class="block-testimony">
                <img src="<?php echo get_template_directory_uri() ?>/images/person_1.jpg" alt="Image" class="img-fluid">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat,
                  sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed,
                  assumenda.&rdquo;</p>
                <p class="small">&mdash; Marrygrace Woodland</p>
              </div>
              <div class="block-testimony">
                <img src="<?php echo get_template_directory_uri() ?>/images/person_2.jpg" alt="Image" class="img-fluid">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident suscipit dicta repellat,
                  sit aut at nulla quam sed, neque voluptatum deserunt, vero ipsum natus sint culpa illo. Vel, sed,
                  assumenda.&rdquo;</p>
                <p class="small">&mdash; Jean Doe</p>
              </div>
              <div class="block-testimony">
                <img src="<?php echo get_template_directory_uri() ?>/images/person_3.jpg" alt="Image" class="img-fluid">
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

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2>My Photography</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_1.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Autumn Leaf</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Sea Creatures</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_3.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Enjoying Deep Sea</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_4.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Beautiful Beach</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_5.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Laughter is Science</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <a class="image-gradient" href="single.html">
              <figure>
                <img src="<?php echo get_template_directory_uri() ?>/images/img_6.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <h3>Knot Tying</h3>
                <span>5 photos / Nature</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
  

</body>

</html>