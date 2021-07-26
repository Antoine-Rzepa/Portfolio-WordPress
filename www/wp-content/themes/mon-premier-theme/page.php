<?php get_header(); ?>

<div class="container pt-2">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
</div>

<div class="container">

    <div class="d-flex justify-content-center">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
