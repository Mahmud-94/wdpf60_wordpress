<?php

add_theme_support('post-thumbnails');

function register_hasan_menu() {
  register_nav_menu( 'primary', __( 'Main location', 'hasantheme' ) );
//   register_nav_menu( 'secondary', __( 'footer Menu location', 'hasantheme' ) );
}


add_action( 'after_setup_theme', 'register_hasan_menu' );


function slider_post_type() {
	register_post_type('hasan_slider',
		array(
			'labels'      => array(
				'name'          => __('sliders', 'textdomain'),
				'singular_name' => __('slider', 'textdomain'),
			),
				'public'      => true,
        'supports' => array('title', 'thumbnail'),
				
		)
	);
}
add_action('init', 'slider_post_type');

/**
 * Add a sidebar.
 */
function sidebar_widgets_areas() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'hasantheme' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'hasantheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div></div>',
		'before_title'  => '',
		'after_title'   => '">',
	) );

  // function sidebar_widgets_areas() {
  //   register_sidebar( array(
  //     'name'          => __( 'Right Sidebar', 'hasantheme' ),
  //     'id'            => 'right-sidebar',
  //     'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'hasantheme' ),
  //     'before_widget' => '<div class="box">
	// 		<div class="heading">
				
	// 		</div>
	// 		<div class="content">',
  //     'after_widget'  => '</div>
	// 	</div>',
  //     'before_title'  => '<div class="heading">',
  //     'after_title'   => '</div>',
  //   ) );

  register_sidebar( array(
		'name'          => __( 'Footer Sidebar-1', 'hasantheme' ),
		'id'            => 'footer-sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'hasantheme' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sidebar_widgets_areas' );



?>