<?php

global $lepton_filemanager;
if (!is_object($lepton_filemanager)) require_once( "../../framework/class.lepton.filemanager.php" );

$form_backend_files = array(
	'/modules/form/modify_settings.php',
	'/modules/form/save_settings.php',
	'/modules/form/modify_field.php',
	'/modules/form/move_up.php',
	'/modules/form/move_down.php',
	'/modules/form/save_field.php',
	'/modules/form/add_field.php',
	'/modules/form/delete_field.php',
	'/modules/form/delete_submission.php',
	'/modules/form/view_submission.php'
);

$lepton_filemanager->register_file( $form_backend_files );

?>