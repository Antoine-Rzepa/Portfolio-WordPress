<?php get_header(); ?>

<div class="container pt-2">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
</div>

<div class="container mb-5">
    <h1 class="has-text-align-center pink mb-5"><?php the_title(); ?></h1>
    <div class="d-flex justify-content-center mb-4">
        <div class="contact-background">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
