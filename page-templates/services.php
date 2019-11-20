<?php
/*
Template Name: Services
*/
get_header(); ?>
<?php
$photo = get_field('photograph');
$desc = get_field('description');
$contact = get_field('rightcolumn');
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
            <?php echo $rightcolumn; ?>
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
    </div>
</div>

<?php get_footer();
