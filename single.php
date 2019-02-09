<?php get_header();?>

<?php $title = get_the_title(get_option('page_for_posts', true)) ;?>

<div class="singlehome-container">
    <?php if (have_posts()) : ?>
        <div class="singlehome-news">
            <?php while (have_posts()) : the_post(); ?>
                    <h2 class="singlehome-singlecard">
                        <?php the_title(); ?>
                    </h2>
                    <p><?php the_content() ;?></p>
                    <div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="singlehome-auteur">
                        <p><?php the_time('d F Y');?> / par <?php the_field('auteur') ;?></p>
                    </div>

            <?php comments_template();?>
        </div>
</div>


    <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>
