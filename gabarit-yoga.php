<?php /* Template Name: Gabarit yoga */?>

<?php get_header();?>

<?php if(have_posts()) :?>
        <div class="yoga">
        <?php while (have_posts()) : the_post(); ?>
                <div class="yoga-card1">
                    <div class="yoga-card1-text">
                        <h2><?php the_field('titre_enfant') ;?></h2>
                        <?php the_field('texte_enfant') ;?>
                    </div>
                    <?php $image = get_field('photo_enfant') ;?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
                </div>
                <div class="yoga-card2">
                    <div class="yoga-card2-text">
                        <h2><?php the_field('titre_adulte') ;?></h2>
                        <?php the_field('texte_adulte') ;?>
                    </div>
                    <?php $image = get_field('photo_adulte') ;?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
                </div>
        <?php endwhile;?>
        </div>
<?php endif;?>

<?php get_footer(); ?>
