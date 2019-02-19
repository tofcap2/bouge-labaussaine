<?php /* Template Name: Gabarit trail2018 */?>

<?php get_header();?>

<?php if(have_posts()) :?>
    <ul class="trail-menu">
        <li>Trail 15km</li>
        <li>Trail 29km</li>
        <li>Résultats</li>
        <li>Photos</li>
        <li></li>
    </ul>
        <div class="trail">
        <?php while (have_posts()) : the_post(); ?><div class="parcours15">
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
        <div class="resultats">
            <h2>Résultats</h2>
            <a href="https://www.klikego.com/resultats/trail-des-chataignes-2018/1492734788105-2"><?php the_field('resultat15') ;?></a>
        </div>

        <?php endwhile;?>
        </div>
<?php endif;?>

<?php get_footer(); ?>
