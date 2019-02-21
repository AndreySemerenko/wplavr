<h2><?php the_title(); ?></h2>
<p class="infopost">Posted <span class="date">on <?php the_modified_date(); ?></span> by <a
        href="<?php the_permalink(); ?>"><?php the_author(); ?></a> &nbsp;&nbsp;|&nbsp;&nbsp;
    Filed under <a href="#">templates</a>, <a href="#">internet</a> &nbsp;&nbsp; <a href="#"
                                                                                    class="com">Comments
        <span>11</span></a></p>
<div class="clr"></div>
<div class="img"><?php the_post_thumbnail('thumbnail'); ?></div>
<div class="post_content">
    <?php the_content(); ?>
    <p class="spec"><a href="<?php the_permalink(); ?>" class="rm">» Read more</a></p>
</div>
<div class="clr"></div>