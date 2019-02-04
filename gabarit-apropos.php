<?php /* Template Name: Gabarit apropos */?>

<?php get_header();?>

<?php if(have_posts()) :?>


        <?php while (have_posts()) : the_post(); ?>

        <div class="apropos">
                <h1 class="apropos-title"><?php the_title() ;?></h1>
                <div class="apropos-rens">
                    <?php if ( has_post_thumbnail() ) : ?>
                            <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
                    <?php endif; ?>
                        <div class="apropos-content">
                            <?php the_content() ;?>
                        </div>
                </div>
        </div>

        <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>
