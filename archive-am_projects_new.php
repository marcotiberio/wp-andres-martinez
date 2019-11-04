<?php
get_header(); ?>
<div class="grid-x grid-padding-x fluid">

    <div class="cell small-12 medium-12">

        <section class="mobilefilter">
            <nav class="mobilefilter-list">
                <a href="#">Teaching</a>
                <a href="#">Residential</a>
                <a href="#">Office</a>
                <a href="#">Urban Design</a>
            </nav>
        </section>

        <table id="work" class="work tablesorter">
            <thead>
                <tr>
                    <th id="wdate">Date</th>
                    <th id="wname">Name <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                    <th id="wtype">Type <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                </tr>
            </thead>
            <?php
            $args = array(
                'post_type' => 'am_projects',
                'posts_per_page' => 100,
                'meta_key' => 'year',
                'orderby' => 'date',
                'order'	=> 'ASC'
            );
            $works = new WP_Query( $args ); ?>
            <tbody>
                <?php while ( $works->have_posts() ): $works->the_post();
                $date = get_field('year');
                $tags = get_the_terms($post->ID,'project_types');
                ?>
                <tr id="<?php $i = 1; foreach ($tags as $tag) { echo $tag->name;  echo ($i < count($tags))? ", " : ""; $i++; } ?>">
                    <td><?php echo $date; ?></td>
                    <td><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></td>
                    <td class="<?php $i = 1; foreach ($tags as $tag) { echo $tag->name;  echo ($i < count($tags))? ", " : ""; $i++; } ?>"><?php $i = 1; foreach ($tags as $tag) { echo $tag->name;  echo ($i < count($tags))? ", " : ""; $i++; } ?></td>
                </tr>
                <?php endwhile; wp_reset_postdata(); ?>
            </tbody>

        </table>
    </<a>

		<script>
		$("document").ready(function() {
	setTimeout(function() {
			$("#wdate").trigger('click');
			$("#wdate").trigger('click');
	},10);
});
		</script>

</div>
<?php get_footer();
