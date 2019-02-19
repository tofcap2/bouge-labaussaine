<?php /* Template Name: Gabarit trail */?>

<?php get_header();?>

<?php if(have_posts()) :?>

        <div class="trail">
        <?php while (have_posts()) : the_post(); ?>
            <a href="<?php echo site_url()?>/reglement/">
                <div class="trailcard">
                    <div class="trailcard-text">
                        <?php the_field('reglement') ;?>
                    </div>
                    <div class="trailcard-img">
                        <img src="<?php echo bloginfo('template_url') ;?>/image/trail2017.jpg" alt="Logo" >
                    </div>
                </div>
            </a>
            <a href="<?php echo site_url()?>/trail-2017/">
                <div class="trailcard">
                    <div class="trailcard-text">
                        <?php the_field('trail_2017') ;?>
                    </div>
                    <div class="trailcard-img">
                        <img src="<?php echo bloginfo('template_url') ;?>/image/trail2017.jpg" alt="Logo" >
                    </div>
                </div>
            </a>
            <a href="<?php echo site_url()?>/trail-2018/">
                <div class="trailcard">
                    <div class="trailcard-text">
                        <?php the_field('trail_2018') ;?>
                    </div>
                    <div class="trailcard-img">
                        <img src="<?php echo bloginfo('template_url') ;?>/image/trail2017.jpg" alt="Logo" >
                    </div>
                </div>
            </a>
        <?php endwhile;?>
        </div>
<?php endif;?>

<?php get_footer(); ?>
