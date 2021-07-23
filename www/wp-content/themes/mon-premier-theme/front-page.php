<?php get_header(); ?>
<?php the_post_thumbnail(); ?>
    <div class="container-good pt-2">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile ?>
<?php endif; ?>



<?php get_footer() ?>


