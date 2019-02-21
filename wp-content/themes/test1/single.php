<?php get_header(); ?>
<div class="content_resize">
    <div class="mainbar">
        <?php the_post(); ?>
        <article class="article">
            <?php $content = get_post_format();
            get_template_part( 'single-content/content', $content);?>
        </article>
    </div>

    <?php get_sidebar(); ?>
    <div class="clr"></div>
</div>
<?php get_footer(); ?>