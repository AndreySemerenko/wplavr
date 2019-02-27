<!doctype html>
<html lang="<?php language_attributes(); ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="wrapper">
        <nav class="portfolio-menu">
            <?php wp_nav_menu([
                'theme_location' => 'portfolio-top',
                'container' => null,
                'items_wrap' => '<ul>%3$s</ul>'
            ]); ?>
        </nav>
        <section class="content-item organization">

            <article class="content-item_article">
                <h2 class="item-article-title">our strong
                    organaisation</h2>
                <p class="description-article">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod
                    tempor incididunt ut labore et. ectetur adig ipis cing elit, sed do eiusmod tempor incididunt.</p>
                <div class="button-article"><a href="#contact">Contact Us</a></div>
            </article>
            <div class="video-organization">

                <div class="video-width"></div>

                <iframe class="video-content" src="https://www.youtube.com/embed/pNMN116x2hw"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>


            </div>
        </section>
    </div>

</header>
<main class="content">

    <section class="content-item provide">
        <div class="wrapper">
            <article class="content-item_article_second">
                <h2 class="item-article-title_second">do you know we can
                    provide for you ?</h2>
                <p class="description-article_second">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do
                    eiusmod
                    tempor incididunt ut labore et.Lorem ni ipsum dolor sit amet, consectetur adipis cing elit, ed doi
                    eiusmod tempor incididunt ut labore et.</p>
                <div class="button-article_second"><a href="3">Learn More</a></div>
            </article>
            <div class="profession">

                <div class="profession-item">
                    <div class="profession-icon"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/Settings.png" ?>" alt="">
                    </div>
                    <div class="profession-item_title">Management</div>
                    <div class="profession-item_description">Lorem ipsum dolor sitea amet, zixf conseit adipi cing elit,
                        seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
                    </div>
                </div>
                <div class="profession-item">
                    <div class="profession-icon"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/Pencil.png" ?>" alt="">
                    </div>
                    <div class="profession-item_title">UI /UX Design</div>
                    <div class="profession-item_description">Lorem ipsum dolor sitea amet, zixf conseit adipi cing elit,
                        seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
                    </div>
                </div>
                <div class="profession-item">
                    <div class="profession-icon"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/Diamond.png" ?>" alt="">
                    </div>
                    <div class="profession-item_title">Logo / Branding</div>
                    <div class="profession-item_description">Lorem ipsum dolor sitea amet, zixf conseit adipi cing elit,
                        seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
                    </div>
                </div>
                <div class="profession-item">
                    <div class="profession-icon"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/Truck_2.png" ?>" alt="">
                    </div>
                    <div class="profession-item_title">Animation</div>
                    <div class="profession-item_description">Lorem ipsum dolor sitea amet, zixf conseit adipi cing elit,
                        seddi do eiusmod btdempor in didunt utlae ore etioe.Lorem ipsum new idolor
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="features-products">
        <div class="wrapper">
            <h2 class="features-title">feature products</h2>
            <p class="features-descr">Lorem ipsum dolor sit amet, consectetur adipis cing elit,sed do eiusmod tempor
                incididunt ut labore et.</p>
            <div class="features-descr-bottom"></div>
            <ul class="features-gallery">
                <li class="gallery-tab"><a href="#all">all</a></li>
                <li class="gallery-tab"><a href="#print">print template</a></li>
                <li class="gallery-tab"><a href="#web">web template</a></li>
                <li class="gallery-tab"><a href="#user">user interface</a></li>
                <li class="gallery-tab"><a href="#mock">mock-up</a></li>
            </ul>
            <div class="features-gallery__content">
                <div id="all" class="main-tab-content">
                    <div class="all-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>"
                                               alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>"
                                               alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/4.jpg" ?>"
                                               alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>"
                                               alt=""></div>
                    <div class="all-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/6.jpeg" ?>" alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/7.jpg" ?>"
                                               alt=""></div>
                    <div class="all-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/8.jpg" ?>"
                                               alt=""></div>
                </div>
                <div id="print" class="main-tab-content">
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/6.jpeg" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/7.jpg" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/8.jpg" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>" alt=""></div>
                    <div class="print-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/4.jpg" ?>" alt=""></div>
                </div>
                <div id="web" class="main-tab-content">
                    <div class="web-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/6.jpeg" ?>" alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/7.jpg" ?>"
                                               alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/8.jpg" ?>"
                                               alt=""></div>
                    <div class="web-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>"
                                               alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>"
                                               alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/4.jpg" ?>"
                                               alt=""></div>
                    <div class="web-item"><img src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>"
                                               alt=""></div>
                </div>
                <div id="user" class="main-tab-content">
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/8.jpg" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/6.jpeg" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/7.jpg" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/4.jpg" ?>" alt=""></div>
                    <div class="user-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>" alt=""></div>
                </div>
                <div id="mock" class="main-tab-content">
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/6.jpeg" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/7.jpg" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/8.jpg" ?>" alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                alt=""></div>
                    <div class="mock-item"><img
                                src="<?php echo get_template_directory_uri() . "/assets/images/4.jpg" ?>" alt=""></div>
                </div>
            </div>
        </div>



    </section>
    <section class="meet">
        <div class="wrapper">
            <h2 class="meet-title">Meet our team</h2>
            <p class="meet-descr">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing eiusmod tempor
                incididut labore Ui / Ux , print template.</p>
            <div class="meet-descr-bottom"></div>
            <div class="meet-second">
                <div class="meet-img"><img src="<?php echo get_template_directory_uri() . "/assets/images/petya.jpg" ?>"
                                           alt=""></div>
                <div class="meet-author_block">
                    <h2 class="meet-author_name">mark waugh</h2>
                    <p class="meet-author_descr">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed dooing
                        eiusmod tempor incididut labore Ui / Ux , print template.</p>
                    <div class="meet-author_social">
                        <a href="#" class="meet-author_social_item">Facebook</a>
                        <a href="#" class="meet-author_social_item">Dribble</a>
                        <a href="#" class="meet-author_social_item">Behance</a>
                        <a href="#" class="meet-author_social_item">Twiter</a>
                    </div>
                    <div class="meet-images">
                        <div class="meet-images_item"><img
                                    src="<?php echo get_template_directory_uri() . "/assets/images/download.jpeg" ?>"
                                    alt=""></div>
                        <div class="meet-images_item"><img
                                    src="<?php echo get_template_directory_uri() . "/assets/images/3.png" ?>" alt=""></div>
                        <div class="meet-images_item"><img
                                    src="<?php echo get_template_directory_uri() . "/assets/images/2.png" ?>" alt=""></div>
                        <div class="meet-images_item"><img
                                    src="<?php echo get_template_directory_uri() . "/assets/images/5.jpg" ?>" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="subscribe">
        <div class="wrapper">
            <h2 class="subscribe-title">Design tips, tricks, and freebies. Delivered weekly.</h2>
            <p class="subscribe-descr">Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod.</p>
            <form method="post" id="subscribe" action="">
                <input class="email-form" type="text" name="email" placeholder="Email Address..."/>
                <input class="button-email" type="button" id="btn" value="subscribe"/>
            </form>
        </div>

    </section>

</main>
<footer class="footer"></footer>
<?php wp_footer(); ?>
</body>
</html>