<?php get_header(); ?>

    <main class="posts">
        <?php
        while (have_posts()) :
            the_post();

			the_title('<h1>','</h1>');
			the_content();


            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;
        ?>
    </main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
