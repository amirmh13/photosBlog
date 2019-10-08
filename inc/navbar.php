<header class="site-navbar py-3" role="banner">

    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-6 col-xl-3">
                <h1 class="mb-0">
                    <a href="<?php bloginfo('url')?>" class="text-white h2 mb-0">
                        <img height="85px" width="85px" src="<?php echo get_template_directory_uri() ?>/images/logo.png"
                            alt="Rasoulifar Art Gallery">
                    </a>
                </h1>
            </div>
            <div class="col-10 col-md-6 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block p-0">
                        <li class="<?php if(is_home()) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>"><?php _e('Home','photosBlog') ?></a>
                        </li>

                        <li class="<?php if(is_page_template( 'services.php' )) echo 'active'?>">
                            <a
                                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/products'; else echo '/محصولات'; ?>">
                                <?php _e('Products','photosBlog') ?>
                            </a>
                        </li>
                        <li class="<?php if(is_page_template( 'about.php' )) echo 'active'?>">
                            <a
                                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/about-us'; else echo '/درباره-ما';?>"><?php _e('About Us','photosBlog') ?></a>
                        </li>
                        <li class="<?php if(is_page_template( 'contact.php' )) echo 'active'?>">
                            <a
                                href="<?php bloginfo('url'); if (get_locale() == 'en_US') echo '/contact-us'; else echo '/تماس-با-ما';?>"><?php _e('Contact Us','photosBlog') ?></a>
                        </li>



                    </ul>
                </nav>
            </div>

            <div class="col-6 col-xl-2 text-right">
                <div class="d-none d-xl-inline-block">
                    <!-- <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
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
                            <a href="#" class="pl-3 pr-3"><span class="icon-telegram"></span></a>
                        </li>
                    </ul> -->
                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block p-0">
                        <li>
                            <?php dynamic_sidebar('myPhoto') ?>
                        </li>

                    </ul>

                </div>

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                        <span class="icon-menu h3"></span>
                    </a>
                </div>

            </div>

        </div>
    </div>

</header>