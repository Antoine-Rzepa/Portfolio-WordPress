<?php get_header(); ?>
<div class="front-page">
    <?php the_post_thumbnail('home-header', ['class' => 'img-front']); ?>

    <div class="container-front-page">

        <div class="container">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>

                    <hr>
                    <h2 class="has-text-align-center mb-4">Exemple de modules</h2>

                    <div class="row">
                        <?php
                        $query = new WP_Query([
                            'post_type' => 'modules',
                            'orderby' => 'rand',
                            'posts_per_page' => 3
                        ]);
                        while ($query->have_posts()): $query->the_post();
                            ?>

                            <div class="col-sm-4 mb-4">
                                <div class="card">
                                    <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
                                    <div class="card-body">
                                        <h5 class="card-title has-text-align-center"><?= get_the_title() ?></h5>
                                        <?php if (get_field('numero_du_module')) : ?>
                                            <p class="card-text has-text-align-center">
                                                Module <?= get_field('numero_du_module'); ?><br>
                                                (<?= get_field('duree_du_module'); ?>
                                                <?= get_field('laps_de_temps'); ?>)
                                            </p>
                                            <a href="<?php the_permalink() ?>"
                                               class="btn d-flex justify-content-center btn-pink">Voir plus</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                <?php endwhile ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer() ?>


