<?php

/**
 * This file is part of an ADDON for use with LEPTON Core.
 * This ADDON is released under the GNU GPL.
 * Additional license terms can be seen in the info.php of this module.
 *
 * @module          show_menu2
 * @author          Brofield,LEPTON Project
 * @copyright       2006-2010 Brofield
 * @copyright       2010-2014 LEPTON Project
 * @link            http://www.LEPTON-cms.org/sm2/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see info.php of this module
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if ( defined( 'LEPTON_PATH' ) )
{
				include( LEPTON_PATH . '/framework/class.secure.php' );
}
else
{
				$oneback = "../";
				$root    = $oneback;
				$level   = 1;
				while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) )
				{
								$root .= $oneback;
								$level += 1;
				}
				if ( file_exists( $root . '/framework/class.secure.php' ) )
				{
								include( $root . '/framework/class.secure.php' );
				}
				else
				{
								trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR );
				}
}
// end include class.secure.php

/**
 *	try to remove obsolete columns from pages_table
 *  first check if the columns exist
 */
$checkDbTable = $database->query("SHOW COLUMNS FROM `".TABLE_PREFIX."pages` LIKE 'page_icon'");
$column_exists = $checkDbTable->numRows() > 0 ? TRUE : FALSE;

if (true === $column_exists ) {
 $database->query('ALTER TABLE `' . TABLE_PREFIX . 'pages` DROP COLUMN `page_icon`');
}

$checkDbTable = $database->query("SHOW COLUMNS FROM `".TABLE_PREFIX."pages` LIKE 'menu_icon_0'");
$column_exists = $checkDbTable->numRows() > 0 ? TRUE : FALSE;

if (true === $column_exists ) {
 $database->query('ALTER TABLE `' . TABLE_PREFIX . 'pages` DROP COLUMN `menu_icon_0`');
}

$checkDbTable = $database->query("SHOW COLUMNS FROM `".TABLE_PREFIX."pages` LIKE 'menu_icon_1'");
$column_exists = $checkDbTable->numRows() > 0 ? TRUE : FALSE;

if (true === $column_exists ) {
 $database->query('ALTER TABLE `' . TABLE_PREFIX . 'pages` DROP COLUMN `menu_icon_1`');
} 
 
?>