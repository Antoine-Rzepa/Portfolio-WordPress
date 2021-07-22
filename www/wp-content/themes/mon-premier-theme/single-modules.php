<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="has-text-align-center"><?php the_title() ?></h1>
        <?php the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
        <p class="has-text-align-center"><?php the_content(); ?></p>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer() ?>