<?php
/**
 * The template for displaying all single projects
 
 */

get_header(); ?>
<div class="grid-x grid-padding-x fluid singleproject">
    <div class="cell small-12 medium-12">
        <div class="orbit show-for-medium" role="region" aria-label="Project Images" data-orbit data-options="autoPlay:false;" data-anim-in-from-right="slide-in-down" data-anim-out-to-right="slide-out-up" data-anim-in-from-left="slide-in-up" data-anim-out-to-left="slide-out-down">
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

    
    <ul class="show-for-small-only images">
         <?php foreach ($slides as $slide) { ?>
            <li>
                <img class="orbit-image" src="<?php echo $slide['url'];?>" alt="<?php echo $slide['alt']; ?>">
            </li>  
            <?php } ?>
         </ul>
         </div>
</div>
<script type="text/javascript" >
$(document).ready(function(){
    setTimeout(function() {$('.orbit').fadeIn(250); }, 500);
    var isAnimating = false;
$('.orbit-container').mousewheel(function(event){
    if(isAnimating) {
        console.log('Fired');
        stop
        return;
        
    }
    else {
        if (event.deltaY > 0) {
        var isLTR = true;
            $('.orbit').foundation('changeSlide', isLTR);
        } else {
        var  isLTR = false;
            $('.orbit').foundation('changeSlide', isLTR);
        }
        console.log(isLTR);   
    } 
});

window.addEventListener('keyup', function(e) {
    var isLTR;

    switch(e.keyCode) {
      case 38:
        isLTR = true;
        $('.orbit').foundation('changeSlide', isLTR);

        break;
      case 40:
        isLTR = false;
        $('.orbit').foundation('changeSlide', isLTR);
        break;
    }


});

$('.orbit').on('beforeslidechange.zf.orbit', function() {
    isAnimating = true;
});
$(".orbit-container").mousewheel(function() {
  clearTimeout($.data(this, 'timer'));
  $.data(this, 'timer', setTimeout(function() {
    console.log("Ready")
     isAnimating = false;
  }, 50)); //150 original value
});
});

</script>

<div class="scrollbarhiding">
</div>
<div class="project-information">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-4 small-12 name">
            <span><?php the_title(); ?></span>
            <div class="hidden-stuff font-small">
                <?php the_field('technical_info'); ?>
            </div>
        </div>
        <div class="cell medium-4 small-12 description">
            <span>Description</span>
            <div class="hidden-stuff">
                <?php the_field('description'); ?>
            </div>
        </div>
        <div class="cell medium-4 small-12 related-projects">
            <span>Related projects</span>
            <div class="hidden-stuff">
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
