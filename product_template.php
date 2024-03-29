<?php /* Template Name: productTemplate */ ?>

<?php get_header(); ?>
<?php
if (have_posts()) {
  the_post();
}
?>

<body class="<?php if( get_locale() == 'fa_IR') echo 'persian' ?>">

    <div class="site-wrap">

        <div class="site-blocks-cover overlay inner-page-cover"
            style="background-image: url('<?php echo get_template_directory_uri() ?>/images/photo_2019-08-26_17-52-55.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade-up">
                        <h1><?php the_title();?></h1>
                        <!-- <p class="caption">36 Pictures / Nature</p> -->
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section py-3 py-lg-5" data-aos="fade">
            <div class="container">

                <div class="row no-gutters" id="lightgallery">
                    <?php echo get_the_content();?>
                </div>
            </div>
        </div>


        <?php get_footer(); ?>

</body>

</html>