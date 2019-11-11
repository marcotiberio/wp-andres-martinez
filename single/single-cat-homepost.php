<?php
/**
 * The template for displaying all single posts and attachments categorized homepost
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="image-single-post">
	<div></div>
	<div><?php get_template_part( 'template-parts/featured-image' ); ?></div>
	<div></div>
</div>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/homepage-post', '' ); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
