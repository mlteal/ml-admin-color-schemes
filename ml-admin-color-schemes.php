<?php
/**
 * Plugin Name: ML Admin Color Schemes
 * Plugin URI: http://mlteal.com
 * Description: Moar admin color schemes
 * Version: 0.1
 * Author: mlteal
 * Author URI: http://mlteal.com
 * Text Domain: ml_admin_schemes
 *
 * GitHub Plugin URI: https://github.com/mlteal/ml-admin-color-schemes
 */

/*
A fork of the Admin Color Schemes plugin by Kelly Dwan, Mel Choyce, Dave Whitley, Kate Whitley

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class ML_Color_Schemes {

	/**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering colors-fresh dependency.
	 */
	private $colors = array(
		'em-ell',
		'plaid-shirt',
	);

	function __construct() {
		add_action( 'admin_init' , array( $this, 'add_colors' ) );
	}

	/**
	 * Register color schemes.
	 */
	function add_colors() {
		$suffix = is_rtl() ? '-rtl' : '';

		wp_admin_css_color(
			'em-ell', __( 'Em Ell', 'ml_admin_schemes' ),
			plugins_url( "em-ell/colors$suffix.css", __FILE__ ),
			array( '#222222', '#3BCDB7', '#5B73ED', '#FF6666' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);

		wp_admin_css_color(
			'plaid-shirt', __( 'Plaid Shirt', 'ml_admin_schemes' ),
			plugins_url( "plaid-shirt/colors$suffix.css", __FILE__ ),
			array( '#e63e48', '#67b4e3', '#f3f3ec', '#FFBE68' ),
			array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
		);


	}

}
global $ml_colors;
$ml_colors = new ML_Color_Schemes;

