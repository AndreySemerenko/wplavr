<?php get_header(); ?>

<main class="clearfix">
    <div class="postFlow">
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
                <article class="postItem">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <h2><?php the_title(); ?></h2>
                    <span><?php echo CFS()->get('intro'); ?></span>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <h2>Записей нет!</h2>
        <?php endif; ?>

    </div>

    <?php the_posts_pagination(); ?>
</main>
<?php get_sidebar(); ?>


<?php get_footer(); ?>
