<?php
get_header(); ?>
<div class="grid-x grid-padding-x fluid">
    <div class="cell small-12 medium-12">
    
    <section class="mobilefilter">
        <nav class="mobilefilter-list">
            <a href="teaching" class="type">Teaching</a>
            <a href="#" class="type">Residential</a>
            <a href="#" class="type">Office</a>
            <a href="#" class="type">Urban Design</a>
        </nav>
    </section>
    
        <table id="work" class="work tablesorter">
            <thead>
                <tr>
                    <th id="wdate">Date <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                    <th id="wname">Name <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                    <th class="sorter-false" id="wtype">Type</th>
                    <th class="clear">Back to all</th>
                </tr>
            </thead>
            <?php 
            $args = array(
                'post_type' => 'am_projects',
                'posts_per_page' => -1,
                'meta_key' => 'year',
                'orderby' => 'meta_value',
                'order'	=> 'DESC'
            );
            $works = new WP_Query( $args ); ?>
            <tbody>
                <?php while ( $works->have_posts() ): $works->the_post();
                $date = get_field('year');
                $tags = get_the_terms($post->ID,'project_types');
                $cats = array(

                );
                foreach ($tags as $tag) { array_push($cats, str_replace(' ', '_',strtolower($tag->name))); } 
                ?>
                <tr class="<?php foreach ($cats as $cat) { echo $cat; } ?>">
                    <td><?php echo $date; ?></td>
                    <td><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></td>
                    <td class="type"><?php foreach ($tags as $tag) { echo $tag->name; } ?></td>
                </tr>
                <?php endwhile; wp_reset_postdata(); ?> 
            </tbody>
        </table>
    </div>
    
</div>
<?php get_footer();
