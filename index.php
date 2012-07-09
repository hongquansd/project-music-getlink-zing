<?php

/**
 * @author Dang Hong Quan
 * @copyright 2012
 */
include('include/config.php');
include('include/function/main.php');
$thebaseurl = $config['baseurl'];

//Display
$smarty->display('header.tpl');
topmenu();
$smarty->display('search.tpl');
//$smarty->display('playlist.tpl');
//$smarty->display('listsong.tpl');
listsongindex();
noibat();
//$smarty->display('listmv.tpl');
//$smarty->display('account.tpl');
$smarty->display('footer.tpl');
?>