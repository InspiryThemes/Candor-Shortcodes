<?php
/**
 * Plugin Name:       Candor Shortcodes
 * Description:       This plugin contains shortcodes for Candor theme.
 * Version:           1.0.0
 * Author:            M Saqib Sarwar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


/**
 * Columns
 */

/* columns wrapper */
if( !function_exists( 'inspiry_columns' ) ) :
	function inspiry_columns( $atts, $content = null ) {
		return '<div class="row">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_columns', 'inspiry_columns' );
endif;


/* single column*/
if( !function_exists( 'inspiry_single_column' ) ) :
	function inspiry_single_column( $atts, $content = null ) {
		return '<div class="col-lg-12 col-md-12 col-sm-12">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_single_column', 'inspiry_single_column' );
endif;


/* one half */
if( !function_exists( 'inspiry_two_column' ) ) :
	function inspiry_two_column( $atts, $content = null ) {
		return '<div class="col-lg-6 col-md-6 col-sm-6">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_two_column', 'inspiry_two_column' );
endif;


/* one third */
if( !function_exists( 'inspiry_one_third' ) ) :
	function inspiry_one_third( $atts, $content = null ) {
		return '<div class="col-lg-4 col-md-4 col-sm-4">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_one_third', 'inspiry_one_third' );
endif;


/* two third */
if( !function_exists( 'inspiry_two_third' ) ) :
	function inspiry_two_third( $atts, $content = null ) {
		return '<div class="col-lg-8 col-md-8 col-sm-8">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_two_third', 'inspiry_two_third' );
endif;


/* one fourth */
if( !function_exists( 'inspiry_one_fourth' ) ) :
	function inspiry_one_fourth( $atts, $content = null ) {
		return '<div class="col-lg-3 col-md-3 col-sm-3">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_one_fourth', 'inspiry_one_fourth' );
endif;


/* one sixth */
if( !function_exists( 'inspiry_one_sixth' ) ) :
	function inspiry_one_sixth($atts, $content = null) {
		return '<div class="col-lg-2 col-md-2 col-sm-2">'.do_shortcode($content).'</div>';
	}

	add_shortcode('inspiry_one_sixth', 'inspiry_one_sixth');
endif;


/* three fourth */
if( !function_exists( 'inspiry_three_fourth' ) ) :
	function inspiry_three_fourth( $atts, $content = null ) {
		return '<div class="col-lg-9 col-md-9 col-sm-9">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_three_fourth', 'inspiry_three_fourth' );
endif;



/**
 * Buttons
 */

/* Default Button */
if( !function_exists( 'inspiry_button' ) ) :
	function inspiry_button( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => '',       // possible value are info, success, warning and danger. Leave empty for default style.
			'link' => '#',
			'target' => ''
		), $atts ) );

		$button_class = '';
		if ( ! empty( $type ) ) {
			$button_class = 'btn-' . $type;
		}

		return '<a class="btn ' . $button_class . '" href="' . $link . '" target="' . $target . '">' . do_shortcode( $content ) . '</a>';
	}

	add_shortcode( 'inspiry_button', 'inspiry_button' );
endif;



/**
 * Tabs
 */
if( !function_exists( 'inspiry_tabs' ) ) :
	function inspiry_tabs( $atts, $content = null ) {
		extract( shortcode_atts( array(
			"titles" => '',
		), $atts ) );
		$all_title = explode( ',', $titles );
		$html = '<div class="tabs-container"><ul class="tabs-nav clearfix">';
		foreach ( $all_title as $title ) {
			$html .= '<li>' . $title . '</li>';
		}
		$html .= '</ul>' . do_shortcode( $content ) . '</div>';
		return $html;
	}

	add_shortcode( 'inspiry_tabs', 'inspiry_tabs' );
endif;


if( !function_exists( 'inspiry_tab_pane' ) ) :
	function inspiry_tab_pane( $atts, $content = null ) {
		return '<div class="tab-content">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_tab_pane', 'inspiry_tab_pane' );
endif;



/**
 * Accordion
 */
if( !function_exists( 'inspiry_accordion' ) ) :
	function inspiry_accordion( $atts, $content = null ) {
		return '  <dl class="accordion clearfix">' . do_shortcode( $content ) . '</dl>';
	}

	add_shortcode( 'inspiry_accordion', 'inspiry_accordion' );
endif;


if( !function_exists( 'inspiry_accordion_block' ) ) :
	function inspiry_accordion_block( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => ''
		), $atts ) );

		return '<dt>' . $title . '</dt><dd>' . do_shortcode( $content ) . '</dd>';
	}

	add_shortcode( 'inspiry_accordion_block', 'inspiry_accordion_block' );
endif;


/**
 * Toggles Shortcode
 */
if( !function_exists( 'inspiry_toggles' ) ) :
	function inspiry_toggles( $atts, $content = null ) {
		return '<dl class="toggle clearfix">' . do_shortcode( $content ) . '</dl>';
	}

	add_shortcode( 'inspiry_toggles', 'inspiry_toggles' );
endif;


if( !function_exists( 'inspiry_toggle_block' ) ) :
	function inspiry_toggle_block( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'title' => ''
		), $atts ) );

		return '<dt>' . $title . '</dt><dd>' . do_shortcode( $content ) . '</dd>';
	}

	add_shortcode( 'inspiry_toggle_block', 'inspiry_toggle_block' );
endif;



/**
 * Progress Bar
 */
if( !function_exists( 'inspiry_progress_bar' ) ) :
	function inspiry_progress_bar( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'value' => '0', // possible values 0 to 100
			'color' => '',  // possible values are green, orange, red. Leave empty for blue
		), $atts ) );

		return '<div class="progress-bar-outer"><div class="progress-bar-inner ' . $color . '" style="width: ' . $value . '%"></div><div class="progress-bar-skill-level">' . $value . '%</div></div>';
	}

	add_shortcode( 'inspiry_progress_bar', 'inspiry_progress_bar' );
endif;


/**
 * Alert
 */
if( !function_exists( 'inspiry_alert' ) ) :
	function inspiry_alert( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => '',   // Possible values are success, warning, danger. Leave empty for blue
		), $atts ) );

		$alert_class = '';
		if ( ! empty( $type ) ) {
			$alert_class = 'alert-' . $type;
		}

		return '<div class="alert ' . $alert_class . '">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_alert', 'inspiry_alert' );
endif;


/**
 * Contrast Content
 */
if( !function_exists( 'inspiry_contrast_content' ) ) :
	function inspiry_contrast_content( $atts, $content = null ) {
		return '<div class="contrast-content">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_contrast_content', 'inspiry_contrast_content' );
endif;


/**
 * Wide Content
 */
if( !function_exists( 'inspiry_wide_content' ) ) :
	function inspiry_wide_content( $atts, $content = null ) {
		return '<div class="wide-content">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_wide_content', 'inspiry_wide_content' );
endif;


/**
 * Full Width Content
 */
if( !function_exists( 'inspiry_full_width_content' ) ) :
	function inspiry_full_width_content( $atts, $content = null ) {
		return '<div class="full-width-content">' . do_shortcode( $content ) . '</div>';
	}

	add_shortcode( 'inspiry_full_width_content', 'inspiry_full_width_content' );
endif;