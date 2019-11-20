<?php get_header(); ?>
<div class="grid-x grid-padding-x overview">
    <div class="cell medium-6 small-12 projects">
    <?php $args = array(
                    'post_type' => 'am_projects',
                    'posts_per_page' => -1,
                    'meta_key' => 'feature_on_home',
                    'meta_value' => '1'
                );
                $works = new WP_Query( $args ); 
                while ( $works->have_posts() ) : $works->the_post(); ?>

                <div class="featured-project">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="small-info">
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><?php the_field('year'); ?></p>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="scrollbarhiding hide-for-small-only project">
    </div>
    <div id="news" class="cell medium-5 medium-offset-1 hide-for-small-only news">
    <?php $newsargs = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    $newsquery = new WP_Query( $newsargs );
    while ( $newsquery->have_posts() ) : $newsquery->the_post(); ?>
    <div class="single-news">
                <?php the_post_thumbnail(); ?>
                <div class="news-info">
                    <span class="date"><?php the_date('j F Y'); ?></span>  <span class="title"><?php the_title(); ?></span>
                    <?php the_content(); ?>
                </div>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
    <?php the_content(); ?>
    </div>
    <div class="scrollbarhiding news">
    </div>
</div>
<?php get_footer(); ?>