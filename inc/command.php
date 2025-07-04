<?php
/**
 * WP CLI command.
 *
 * @package coding-test
 */

namespace DMG_Coding_Test\Command;

use WP_CLI;

/**
 * Initialize WP CLI command logic.
 *
 * @return void
 */
function init(): void {
	if ( ! defined( 'WP_CLI' ) || ! \WP_CLI ) {
		return;
	}

	WP_CLI::add_command( 'read-more-dmg', __NAMESPACE__ . '\\execute_read_more_dmg' );
}

/**
 * Execute the `read-more-dmg` WP CLI command.
 *
 * @return void
 */
function execute_read_more_dmg(): void {
	// @todo
}
