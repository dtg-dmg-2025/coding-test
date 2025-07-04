<?php
/**
 * Plugin Name:       DMG Coding Test
 * Text Domain:       dmg-coding-test
 * Description:       A custom plugin implementing functionality for the DMG coding test
 * Author:            David Green <mr.david.thomas.green@gmail.com>
 * Version:           0.0.1
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 6.7
 * Requires PHP:      8.2
 *
 * @package           coding-test
 */

namespace DMG_Coding_Test;

defined( 'ABSPATH' ) || exit;

/**
 * Constants
 */
const PLUGIN_ROOT_DIR = __DIR__;

/**
 * Namespaces.
 */
require_once PLUGIN_ROOT_DIR . '/inc/block.php';
require_once PLUGIN_ROOT_DIR . '/inc/command.php';

/**
 * Init.
 */
Block\init();
Command\init();
