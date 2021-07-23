<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div>
        <img src="../mon-premier-theme/assets/images/campus_numerique_annecy2022-01.jpg" alt="Photo de groupe">
    </div>
        <h1 class="has-text-align-center"><?php the_title() ?></h1>
        <p class="has-text-align-center"><?php the_content(); ?></p>
    <?php endwhile ?>
<?php endif; ?>

<?php get_footer() ?>