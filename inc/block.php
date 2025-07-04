<?php
/**
 * Read More Block.
 *
 * @package coding-test
 */

namespace DMG_Coding_Test\Block;

use const DMG_Coding_Test\PLUGIN_ROOT_DIR;

/**
 * Initialize Block API logic.
 *
 * @return void
 */
function init(): void {
	add_action( 'init', __NAMESPACE__ . '\\register_read_more_dmg' );
}

/**
 * Register `read-more-dmg` block.
 *
 * @return void
 */
function register_read_more_dmg(): void {
	register_block_type( PLUGIN_ROOT_DIR . '/build/read-more-dmg' );
}
