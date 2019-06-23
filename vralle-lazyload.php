<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://github.com/vralle/vralle-lazyload
 * @package           vralle-lazyload
 *
 * @wordpress-plugin
 * Plugin Name:       vralle.lazyload
 * Plugin URI:        https://github.com/vralle/vralle-lazyload
 * Description:       Brings lazySizes.js to WordPress
 * Version:           0.9.7
 * Author:            V.Ralle
 * Author URI:        https://github.com/vralle
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vralle-lazyload
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/vralle/vralle-lazyload.git
 * Requires WP:       4.4
 * Requires PHP:      5.6
 */

use Vralle\Lazyload\App\Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class
 */
require_once plugin_dir_path( __FILE__ ) . 'app/plugin.php';

/**
 * Begins execution of the plugin.
 */
function run_vralle_lazyload() {
	$plugin = new Plugin( plugin_basename( __FILE__ ) );
	$plugin->run();
}
run_vralle_lazyload();
