<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?= language_attributes(); ?>" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta  charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="searchform">
                <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:"
                 type="text"/>
          </span>
                    <input name="button_search" src="<?php echo get_template_directory_uri() . "/assets/images/search.gif"?>" class="button_search" type="image"/>
                </form>
            </div>
            <div class="logo">
                <h1><a href="<?= home_url(); ?>"><?= bloginfo('name'); ?>
                        <small>Company Slogan Here</small>
                    </a></h1>
            </div>
            <div class="clr"></div>
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="index.html"><span>Home Page</span></a></li>
                    <li><a href="support.html"><span>Support</span></a></li>
                    <li><a href="about.html"><span>About Us</span></a></li>
                    <li><a href="blog.html"><span>Blog</span></a></li>
                    <li><a href="contact.html"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider"><a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/slide1.jpg"?>" width="920" height="360"
                                                       alt=""/><span><big>Sed condimentum justo sit amet urna ornare euismod.</big><br/>
          Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/slide2.jpg"?>" width="920" height="360" alt=""/><span><big>Amet urna ornare euismodSed condimentum.</big><br/>
          Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/slide3.jpg"?>" width="920" height="360" alt=""/><span><big>Sed condimentum justo sit amet urna ornare euismod.</big><br/>
          Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="content">