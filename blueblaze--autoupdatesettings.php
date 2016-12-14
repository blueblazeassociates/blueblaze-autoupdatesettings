<?php
/**
 * Blue Blaze Auto Update Settings
 *
 * @author  Blue Blaze Associates
 * @license GPL-2.0+
 * @link    https://github.com/blueblazeassociates/blueblaze-autoupdatesettings
 */

/*
 * Plugin Name:       Blue Blaze Auto Update Settings
 * Plugin URI:        https://github.com/blueblazeassociates/blueblaze-autoupdatesettings
 * Description:       Provides explicit autoupdate settings for plugins (disallowed), themes (disallowed), and translation files (allowed).
 * Version:           1.0.0
 * Author:            Blue Blaze Associates
 * Author URI:        http://www.blueblazeassociates.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/blueblazeassociates/blueblaze-autoupdatesettings
 * GitHub Branch:     master
 * Requires WP:       4.7
 * Requires PHP:      5.6
 */

add_filter( 'auto_update_plugin',      '__return_false' );
add_filter( 'auto_update_theme',       '__return_false' );

if ( defined ( 'AUTOMATIC_UPDATER_DISABLED' ) && false == AUTOMATIC_UPDATER_DISABLED ) {
  add_filter( 'auto_update_translation', '__return_true' );
} else {
  add_filter( 'auto_update_translation', '__return_false' );
}
