<?php

/**
 * @author Dang Hong Quan
 * @copyright 2012
 */
include('include/config.php');
include('include/function/main.php');
$thebaseurl = $config['baseurl'];

$songinfo = array();
if(isset($_GET['sid']))
{
    $sid = intval($_GET['sid']);
    if($sid != "")
    {
        $rs = $conn->Execute("SELECT id, title, singer, url, view, server FROM song WHERE id=".$sid);
        if($rs)
        {
            $songinfo['sid'] = $sid;
            $songinfo['title'] = $rs->fields['title'];
            $songinfo['singer'] = $rs->fields['singer'];
            $songinfo['view'] = $rs->fields['view'];
            $songinfo['url'] = $rs->fields['url'];
            $songinfo['player'] = player($rs->fields['server'],$rs->fields['url']);
            
            $smarty->assign('songinfo',$songinfo);
        }
    }
}  

//Display
$smarty->display('header.tpl');
topmenu();
$smarty->display('search.tpl');
//$smarty->display('playlist.tpl');
//$smarty->display('listsong.tpl');
$smarty->display('playsong.tpl');
//$smarty->display('listmv.tpl');
//$smarty->display('account.tpl');
$smarty->display('footer.tpl');
?>