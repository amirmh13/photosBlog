<?php /* Template Name: About Us */ ?>


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
      style="background-image: url('<?php echo get_template_directory_uri() ?>/images/hero_bg_2.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up">
            <h1>About Me</h1>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6  mb-5">
            <img src="<?php echo get_template_directory_uri() ?>/images/person_7.jpg" alt="Images" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto">
            <h3 class="text-black mb-3">Howdy! I'm Ben</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel tenetur explicabo necessitatibus,
              ad soluta consectetur illo qui voluptatem. Quis soluta maiores eum. Iste modi voluptatum in repudiandae
              fugiat suscipit dolorum harum, porro voluptate quis? Alias repudiandae dicta doloremque voluptates soluta
              repellendus, unde laborum quo nam, ullam facere voluptatem similique.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque praesentium maiores suscipit, ipsum
              repellat. Commodi numquam voluptas, consectetur itaque, fugit quisquam expedita fugiat, nulla ipsum
              inventore neque alias aperiam dicta.</p>
            <p class="mt-5 mb-3">Follow Me</p>
            <p>
              <a href="#" class="pr-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
              <a href="#" class="p-2"><span class="icon-facebook"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <h2 class="text-black">My Skills</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2 class="h5">Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="97" aria-valuemin="0"
                aria-valuemax="100">97%</div>
            </div>
            <h2 class="h5">Video Editing</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0"
                aria-valuemax="100">89%</div>
            </div>
            <h2 class="h5">Wedding Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0"
                aria-valuemax="100">77%</div>
            </div>
            <h2 class="h5">Macro Photography</h2>
            <div class="progress mb-4">
              <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0"
                aria-valuemax="100">55%</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7">
            <h2>See My Photography</h2>
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