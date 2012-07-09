<?php
$config = array();

$config['basedir'] = 'C:/xampp/htdocs/project';
$config['baseurl'] = 'http://localhost/project';

$DBTYPE = 'mysql';
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASS = 'quanquan';
$DBNAME = 'project';

session_start();

$config['adminurl'] = $config['baseurl'].'/administrator';
$config['cssurl'] = $config['baseurl'].'/static/css';
$config['jsurl'] = $config['baseurl'].'/static/js';
$config['imagedir'] = $config['basedir'].'/static/image';
$config['imageurl'] = $config['baseurl'].'/static/image';

require_once($config['basedir'].'/lib/smarty/libs/Smarty.class.php');
require_once($config['basedir'].'/lib/adodb/adodb.inc.php');

//Database Connection
$conn = &ADONewConnection($DBTYPE);
$conn->Pconnect($DBHOST,$DBUSER,$DBPASS,$DBNAME);
@mysql_query("SET NAMES 'UTF8'");

//Smarty config
$smarty = new Smarty;
$smarty->setTemplateDir($config['basedir'].'/templates');
$smarty->setCompileDir($config['basedir'].'/templates_c');
$smarty->setCacheDir($config['basedir'].'/cache');
$smarty->setConfigDir($config['basedir'].'/configs');

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$smarty->assign('baseurl',$config['baseurl']);
$smarty->assign('cssurl',$config['cssurl']);
$smarty->assign('imageurl',$config['imageurl']);
$smarty->assign('jsurl',$config['jsurl']);
?>