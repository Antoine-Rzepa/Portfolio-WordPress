<?php get_header(); ?>

    <div class="container pt-2">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>

    <div class="container">

        <h1 class="has-text-align-center pink">Apprenants</h1>

        <?php if (have_posts()) : ?>
            <div class="row mt-5">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-sm-3 mb-4 d-flex justify-content-center">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <?php the_post_thumbnail('apprenants'); ?>
                                </div>
                                <div class="flip-card-back pt-5">
                                    <h1>
                                        <Strong>
                                            <?php the_title(); ?>
                                        </Strong>
                                    </h1>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
            <!--    --><?php //my_theme_pagination() ?>
            <?php paginate_links(); ?>
        <?php else : ?>
            <h1>Pas d'articles</h1>
        <?php endif; ?>
    </div>
<?php get_footer() ?>