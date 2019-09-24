<?php 
/*
|--------------------------------------------------------------------------
| Environments
|--------------------------------------------------------------------------
|
| This configuration file will automatically set the ENVIRONMENT constant
| based on the server address (e.g. $_SERVER['HTTP_HOST'])
|
|	$environments = array(
|				'development' => array('localhost*', '192.:*'),
|				'production' => array('mysite.com'),
|				);
*/

$environments = array(
				'development_local' => array('localhost*', '192.*', '*.dev', 'local.*'),
				'development' => array('portal.feuerwehr-bs.de'),
				'testing' => array('test.portal-fwbs.de'),
                'production' => array('portal-fwbs.de', 'www.portal-fwbs.de'),
				);
