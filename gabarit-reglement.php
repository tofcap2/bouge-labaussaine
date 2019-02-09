<?php /* Template Name: Gabarit reglement */?>

<?php get_header();?>

<?php if(have_posts()) :?>
    <div class="reglement">
        <?php while (have_posts()) : the_post(); ?>
            <div class="reglement-text">
                <?php the_content() ;?>
            </div>
    </div>

        <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>
