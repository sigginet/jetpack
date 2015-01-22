<?php
/**
 * Testimonials Widget
 * Displays your testimonials from a WordPress.com or Jetpack-enabled self-hosted WordPress site.
 *
 * Author URI: http://automattic.com
 * License: GPL2
 */

class Jetpack_Testimonial_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
		// internal id
			'jetpack_testimonial_widget',
			// wp-admin title
			apply_filters( 'jetpack_widget_name', __( 'Testimonials', 'jetpack' ) ),
			array(
				'description' => __( 'Displays a list of your testimonials.', 'jetpack' ),
			)
		);
	}

	/*
	 * Set up the widget display on the front end
	 */
	public function widget( $args, $instance ) {

	}

	public function form( $instance ) {

	}

	public function update( $new_instance, $old_instance ) {

	}
}

add_action( 'widgets_init', 'jetpack_testimonial_widget_init' );

function jetpack_testimonial_widget_init() {
	if ( ! method_exists( 'Jetpack', 'is_module_active' ) || Jetpack::is_module_active( 'custom-content-types' ) )
		register_widget( 'Jetpack_Testimonial_Widget' );
}