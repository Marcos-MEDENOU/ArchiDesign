<?php
/**
 * Plugin Name:       SVG Block
 * Description:       Display an SVG image as a block, which can be used for displaying icons, dividers, buttons...
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.1.8
 * Author:            Phi Phan
 * Author URI:        https://boldblocks.net
 *
 * @package   SVGBlock
 * @copyright Copyright(c) 2022, Phi Phan
 */

namespace SVGBlock;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Define constants.
define( 'SVG_BLOCK_ROOT', __FILE__ );
define( 'SVG_BLOCK_PATH', trailingslashit( plugin_dir_path( SVG_BLOCK_ROOT ) ) );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function svg_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', __NAMESPACE__ . '\\svg_block_block_init' );

// Load icons library.
require_once __DIR__ . '/includes/icon-library.php';
