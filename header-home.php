<?php $options = get_option('coderit'); ?>
<!doctype html>
<html <?php echo get_language_attributes(); ?>>

<head>
    <title>Saasup</title>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Social-meta tag  -->
    <meta name="description" content=" I’m Razai Zim a Developer.">
    <meta property="og:title" content="Saasup Website" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://coderit.online/Masud/saasup" />
    <meta property="og:image" content="https://coderit.online/Masud/thambil2.png" />
    <!-- Twitter-meta tag  -->
    <meta name="twitter:title" content="Saasup Website">
    <meta name="twitter:description" content=" I’m Razai Zim a Developer.">
    <meta name="twitter:image" content=" https://coderit.online/Masud/thambil2.png">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="shortcut icon" href="<?php echo $options['favicon-upload']['url']; ?>" type="image/x-icon">
    <?php wp_head(); ?>

</head>

<body>
    <!-- strat header_area  -->
    <header class="header_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-3 ">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?> ">
                            <img src="<?php echo $options['header-logo-upload']['url']; ?>" loading="lazy" alt="saasup_logo">
                        </a>
                        <div class="menu-icon">
                            <a href="<?php echo $options['header-button-url']; ?>" class="btn-2"><?php echo $options['header-button']; ?></a>
                            <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="menus d-flex justify-content-end align-items-center">
                        <nav class="menu">

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'd-flex',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ));

                            ?>

                        </nav>
                        <div class="menu-button">
                            <a href="<?php echo $options['header-button-url']; ?>" class="btn-1"><?php echo $options['header-button']; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row benner_area">
                <div class="col-lg-6">
                    <div class="bennar_conteat">
                        <h1><?php echo $options['banner-title']; ?></h1>
                        <p><?php echo $options['banner-description']; ?></p>
                        <ul class=" d-flex">
                            <li><a class=" btn-2" href="<?php echo $options['banner-button1 url']; ?>"><?php echo $options['banner-button1']; ?></a></li>
                            <li><a class=" btn-3 d-flex align-items-center" id="popupVideo" href="<?php echo $options['banner-button2-video-url']; ?>"><?php echo $options['banner-button2']; ?><i class="<?php echo $options['banner-button2-icon']; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bennar-img">
                        <img src="<?php echo $options['banner-image']['url']; ?>" loading="lazy" alt="">
                    </div>
                </div>
            </div>

        </div>

        </div>

    </header>
    <!-- end header_area  -->