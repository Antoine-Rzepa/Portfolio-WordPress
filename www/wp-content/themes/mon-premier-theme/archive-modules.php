<?php get_header(); ?>

    <h1 class="has-text-align-center">Modules</h1>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <?php the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
                    <div class="card-body">
                        <h5 class="card-title has-text-align-center"><?= get_the_title() ?></h5>
                        <p class="card-text has-text-align-center">
                            Module <?= get_field('numero_du_module'); ?><br>
                            (<?= get_field('duree_du_module'); ?>
                             <?= get_field('laps_de_temps'); ?>)
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-dark d-flex justify-content-center">Voir plus</a>
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

<?php get_footer() ?>