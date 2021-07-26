<?php get_header(); ?>
<div class="front-page">
    <?php the_post_thumbnail('home-header', ['class' => 'img-front']); ?>

    <div class="container-front-page pt-2">

        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>

        <div class="container pt-2">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>


