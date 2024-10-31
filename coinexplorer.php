<?php
/*
Plugin Name:  Planet Blockchain Coin Explorer
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Coin Explorer shortcode from https://www.planetblockcha.in/
Version:      3.2.2
Author:       Planet Blockchain
Author URI:   https://www.planetblockcha.in/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
function pbce_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'render' => 'widget',
		'sym' => '',
		'fixed' => '',
	), $atts, 'pbce' );

	ob_start(); ?>
      <div id="pbce"
				data-render="<?php echo $atts['render'] ?>"
				data-full="/coin-explorer"
				data-sym="<?php echo $atts['sym'] ?>"
				data-fixed="<?php echo strtolower($atts['fixed']) ?>"
				data-amcharts="<?php echo plugins_url( 'amcharts/', __FILE__ ) ?>"></div>
  <?php
  return ob_get_clean();
}
add_shortcode( 'pbce', 'pbce_shortcode' );
wp_enqueue_script('pbce_widget', plugins_url( 'widget.js', __FILE__ ), array(), false, true);
?>
