<?php
/**
 * The template for displaying all single projects
 
 */

get_header(); ?>
<div class="grid-x grid-padding-x fluid singleproject">
    <div class="cell small-12 medium-12">
   
        <div class="orbit" role="region" aria-label="Project Images" data-orbit data-anim-in-from-right="slide-in-down" data-anim-out-to-right="slide-out-up" data-anim-in-from-left="slide-in-up" data-anim-out-to-left="slide-out-down">
        <ul class="orbit-container">
         <?php while ( have_posts() ) : the_post(); 
            $slides = get_field('gallery_for_slider');
            foreach ($slides as $slide) { ?>
            <li class="orbit-slide">
                <img class="orbit-image" src="<?php echo $slide['url'];?>" alt="<?php echo $slide['alt']; ?>">
            </li>
        <?php } ?>
        </ul>
        </div>
    </div>
</div>
<script type="text/javascript" >
$(document).ready(function(){
$('.orbit').mousewheel(function(event){
    if (event.deltaY < 0) {
        isLTR = true;
    } else {
        isLTR = false;
    }
    $('.orbit').foundation('changeSlide', isLTR);
});
});
</script>
<div class="scrollbarhiding">
    </div>
<div class="project-information">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-4 small-12 name">
            <span><?php the_title(); ?></span>
            <div class="hidden-stuff hide font-small">
                <?php the_field('technical_info'); ?>
            </div>
        </div>
        <div class="cell medium-4 small-12 description">
            <span>Description</span>
            <div class="hidden-stuff hide">
                <?php the_field('description'); ?>
            </div>
        </div>
        <div class="cell medium-4 small-12 related-projects">
            <span>Related projects</span>
            <div class="hidden-stuff hide">
            <?php 
            $post_objects = get_field('related_projects');

                if( $post_objects ): ?>
                    <ul>
                    <?php foreach( $post_objects as $post): ?>
                        <?php setup_postdata($post); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php wp_reset_postdata();?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer();
