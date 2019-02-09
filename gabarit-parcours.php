<?php /* Template Name: Gabarit parcours */?>

<?php get_header();?>

<?php if(have_posts()) :?>
    <div class="parcours">
        <h1><?php the_title() ;?></h1>
    <?php while (have_posts()) : the_post(); ?>
        <div class="parcours15">
            <div class="parcours15-text">
                <h2><?php the_field('titre15') ;?></h2>
                <?php the_field('texte15') ;?>
                <?php $image = get_field('denivele15') ;?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
            </div>
                <?php $image = get_field('image15') ;?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
            </div>
        </div>
        <div class="parcours29">
            <div class="parcours29-text">
                <h2><?php the_field('titre29') ;?></h2>
                <?php the_field('texte29') ;?>
                <?php $image = get_field('denivele29') ;?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
            </div>
            <div class="parcours29-image">
                <?php $image = get_field('image29') ;?>
                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">
            </div>
        </div>

    <?php endwhile;?>
    </div>
<?php endif;?>

<?php get_footer(); ?>
