<?php get_header(); ?>

<div class="posts">
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <div class="post">
                <?php the_post_thumbnail('thumbnail', array(
                    "class" => "post-image",
                )); ?>
                
                <div class="post-meta">
                    <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="post-plus">
                        <?php the_tags('<div class="tags">','','</div>'); ?>
                        <span class="icon-comment">&nbsp;<?php comments_number('0', '1', '%'); ?></span> 
                        <span class="icon-date">&nbsp;<?php the_time('Y-m-d'); ?></span>
                    </div>
                </div>
    
            </div>

    <?php endwhile;
    endif ?>
</div>

<?php get_footer(); ?>