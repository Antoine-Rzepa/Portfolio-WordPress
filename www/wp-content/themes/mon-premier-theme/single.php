<?php get_header(); ?>

    <div class="container pt-2">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>

    <div class="container mb-5">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
                <div class="container" style="padding-left: 50px; padding-right: 50px">
                    <h1 class="has-text-align-center pt-4"><?php the_title() ?></h1>
                    <p class="has-text-align-center"><?php the_content(); ?></p>
                </div>
            <?php endwhile ?>
        <?php endif; ?>
    </div>

<?php get_footer() ?>