<?php
/**
 *
 * Created by PhpStorm.
 * User: void-admin
 * Date: 15-2-14
 * Time: 上午11:23
 */
require_once(dirname(__FILE__)."/../config.php");
if(is_readable("load_conf")==false)
{
	require_once(dirname(__FILE__)."/setup.php");          //First Time to Run
	exit();
}
$pos="admin";
?>

<?
require_once(dirname(__FILE__)."/../html/admin_index_body.php");

