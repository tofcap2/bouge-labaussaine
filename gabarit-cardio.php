<?php /* Template Name: Gabarit cardio */?>

<?php get_header();?>

<?php if(have_posts()) :?>
        <div class="cardio">
        <?php while (have_posts()) : the_post(); ?>
                <div class="cardio-card1">
                    <div class="cardio-card1-text">
                        <h2><?php the_title() ;?></h2>
                        <?php the_content() ;?>
                    </div>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
                    <?php endif; ?>
                </div>
        <?php endwhile;?>
        </div>
<?php endif;?>

<?php get_footer(); ?>
