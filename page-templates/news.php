<?php 
/*
Template Name: News
*/
get_header(); ?>
<div class="grid-x grid-padding-x">
    <div id="news_mobile" class="cell small-12 news">
        <?php while(have_posts()):the_post();
        the_content(); 
endwhile; wp_reset_postdata();?>
    </div>
    <div class="scrollbarhiding news">
    </div>
</div>

<?php get_footer(); ?>