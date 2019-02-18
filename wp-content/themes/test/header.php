<!doctype html>
<html lang="<?= language_attributes(); ?>">
<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="header-top clearfix">
            <a href="<?= home_url(); ?>" class="logo"><?= bloginfo('name'); ?></a>
            <nav class="topmenu">
                <div class="menu-button">MENU</div>
                <?= wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => null,
                    'items_wrap' => '<ul>%3$s</ul>',
                    '' => ''

                ]); ?>
            </nav>

        </div>
        <div class="header-bottom">
            <span>Wood Design is a modern web & graphic design studio in Europe. We create beautiful things for web and print. You can see our great work examples in Portfolio. If you need a professional design services Contact us. We would love to work with you.</span>
        </div>
    </header>
    <div class="content-wrapper clearfix">