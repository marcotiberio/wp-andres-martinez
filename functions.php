<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

/** Remove Admin bar */
add_filter('show_admin_bar', '__return_false');
/** Projects Custom Post Type */
function create_post_type() {
    register_post_type( 'am_projects',
      array(
        'labels' => array(
          'name' => __( 'Projects' ),
          'singular_name' => __( 'Project' ),
          'add_new' => _x('Add New', 'project'),
          'add_new_item' => __('Add New Project'),
          'edit_item' => __('Edit Project'),
          'new_item' => __('New Project'),
          'all_items' => __('All Projects'),
          'view_item' => __('View Project'),
          'search_items' => __('Search Projects'),
          'not_found' =>  __('No projects found'),
          'not_found_in_trash' => __('No projects found in Trash'), 
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'work'),
      )
    );
    register_taxonomy(
		'project_types',
		'am_projects',
		array(
            'label' => __( 'Project Types' ),
            'query_var' => 'type',
			'rewrite' => array( 'slug' => 'type' ),
		)
	);
  }
  add_theme_support( 'thumbnail' , array('am_projects', 'posts') ); 
  
  add_action( 'init', 'create_post_type' );
  register_taxonomy_for_object_type( 'project_types', 'am_projects' );

function initialize_taxonomy() {
register_taxonomy(
    'publication_types',
    'page',
    array(
        'label' => __( 'Publication Types' ),
        'query_var' => 'type',
        'rewrite' => array( 'slug' => 'type' ),
    )
);
}
add_action( 'init', 'initialize_taxonomy', 0 );