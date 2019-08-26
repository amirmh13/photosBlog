<header class="site-navbar py-3" role="banner">




    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0"><a href="<?php bloginfo('url')?>" class="text-white h2 mb-0">fotograp<span
                            class="text-primary">.</span></a></h1>
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                        <li class="<?php if(is_home()) echo 'active'?>"><a href="<?php bloginfo('url')?>">Home</a></li>
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
                        <?php if(get_locale() == 'en_US'): ?>
                        <li class="<?php if(is_page_template( 'services.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/services">Services</a>
                        </li>
                        <li class="<?php if(is_page_template( 'about.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/about-us-">About</a>
                        </li>
                        <li class="<?php if(is_page_template( 'contact.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/contact-us">Contact</a>
                        </li>
                        <?php endif ?>

                        <?php if(get_locale() == 'fa_IR'): ?>
                        <li class="<?php if(is_page_template( 'services.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/services">سروریس ها</a>
                        </li>
                        <li class="<?php if(is_page_template( 'about.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/about-us-2">درباره ما</a>
                        </li>
                        <li class="<?php if(is_page_template( 'contact.php' )) echo 'active'?>">
                            <a href="<?php bloginfo('url')?>/contact-us">ارتباط با ما</a>
                        </li>
                        <?php endif ?>
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
                    <?php dynamic_sidebar('myPhoto') ?>
                </div>

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a></div>

            </div>

        </div>
    </div>

</header>