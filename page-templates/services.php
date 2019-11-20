<?php
/*
Template Name: Services
*/
get_header(); ?>
<?php
$photo = get_field('photograph');
$desc = get_field('description');
$rightcolumn = get_field('rightcolumn');
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
    </div>
</div>

<?php get_footer();
