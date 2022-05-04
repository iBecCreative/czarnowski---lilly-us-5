<?php get_header(); ?>
    <div id="content-area" class="content-area">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>
