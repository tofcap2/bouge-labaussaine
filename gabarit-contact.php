<?php /* Template Name: Gabarit contact */?>

<?php get_header();?>

<?php if(have_posts()) :?>
<div class="contact">
    <?php while (have_posts()) : the_post(); ?>
        <div class="contact-telechargement">
            <?php  echo do_shortcode('[dg]');?>
        </div>

    <?php endwhile;?>
</div>
<?php endif;?>

<?php get_footer(); ?>
