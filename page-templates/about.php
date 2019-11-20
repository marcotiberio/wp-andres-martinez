<?php
/*
Template Name: About
*/
get_header(); ?>
<?php 
$photo = get_field('photograph');
$desc = get_field('description');
$contact = get_field('contact');
$imprint = get_field('imprint');
?>

<div class="grid-x grid-padding-x about">
    <div class="cell medium-2 small-12 photograph">
        <img src="<?php echo $photo[url]; ?>" alt="<?php echo $photo[alt]; ?>">
    </div>
    <div class="cell medium-6 small-12 description">
        <div class="description">
            <?php echo $desc; ?>
        </div>
    </div>
    <div class="cell medium-4 small-12 contact">
        <div class="contact-info">
            <?php echo $contact; ?>
        </div>
        <?php if( have_rows('social_media') ): ?>
        <ul class="social-media">
            
            <?php while( have_rows('social_media')):the_row();  
                $icon = get_sub_field('fa_icon_code');
                $url = get_sub_field('url'); ?>                
                <li>
                    <a href="<?php echo $url?>">
                        <i class="fa <?php echo $icon; ?>"></i>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <div class="imprint">
            <span>Imprint</span>
            <div class="imprint-text hide">
            &copy; <?php echo (date("Y")." ".substr(get_bloginfo( 'name' ), 0, -1)); ?>
            <?php echo $imprint; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
