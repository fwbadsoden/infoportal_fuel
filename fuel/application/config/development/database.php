<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'mysql5.feuerwehr-bs.de';
$db['default']['username'] = 'db403895_6';
$db['default']['password'] = '4rkWNqZr8ch=';
$db['default']['database'] = 'db403895_6';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = 'fw_';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

// used for testing purposes
if (defined('TESTING'))
{
	@include(TESTER_PATH.'config/tester_database'.EXT);
}
