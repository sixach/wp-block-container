<?php
/**
 * Container Block.
 *
 * @wordpress-plugin
 * Plugin Name:          Sixa - Container Block
 * Description:          A fully customizable wrapper block to group other blocks together. Create more sophisticated designs with more space, colors, gradients, background images, videos, and much more.
 * Tags:                 container, group, section, wrapper, block, gutenberg, sixa
 * Contributors:         sixa, mahdiyazdani, gookaani, kuserich
 * Version:              1.1.0
 * Stable tag:           1.1.0
 * Requires at least:    5.7
 * Requires PHP:         7.3
 * Tested up to:         5.8
 * Author:               sixa AG
 * Author URI:           https://sixa.com
 * License:              GPLv3 or later
 * License URI:          https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:          sixa-block-container
 * Donate link:          https://sixa.com/
 *
 * @package              Sixa_Blocks
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Include the namespace of this block.
 */
use Sixa_Blocks\Container;

/**
 * Composer autoload is needed in this package even if
 * it doesn't use any libraries to autoload the classes
 * from this package.
 *
 * @see    https://getcomposer.org/doc/01-basic-usage.md#autoloading
 */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Initialize your block.
 *
 * Other than this function call, this file should not include any logic
 * and should merely be used as an entry point to use this package as
 * a WordPress plugin.
 */
Container::init();
