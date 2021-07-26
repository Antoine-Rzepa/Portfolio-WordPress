<?php get_header(); ?>

    <div class="container pt-2">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>

    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="has-text-align-center"><?php the_title() ?></h1>
                <?php the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
                <p class="has-text-align-center"><?php the_content(); ?></p>
            <?php endwhile ?>
        <?php endif; ?>
    </div>

<?php get_footer() ?>