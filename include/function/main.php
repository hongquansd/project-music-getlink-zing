<?php
//error_reporting(0);
function totalsong()
{
    global $conn,$smarty;
    $sql   = "SELECT count(*) as total FROM pre_music_song";
    $rs    = $conn->Execute($sql);
    $total = $rs->fields['total'];
    $smarty->assign('total',$total);
    $smarty->display('test.tpl');
    //return intval($total);
}

function topmenu()
{
    global $conn, $smarty;
    $menu = array();
    $i    = 0;
    $rs   = $conn->Execute("SELECT * FROM cat");
    while(!$rs->EOF)
    {
        $menu[$i]['id']   = $rs->fields['id'];
        $menu[$i]['name'] = $rs->fields['name'];
        $i++;
        $rs->MoveNext();
    }
    $smarty->assign('arrmenu',$menu);
    $smarty->display('topmenu.tpl');
}

function listsongindex()
{
    global $conn, $smarty;
    $listsongs = array();
    $i=0;
    $rs = $conn->Execute("SELECT id, title, singer, view FROM song ORDER BY id DESC LIMIT 10");
    while(!$rs->EOF)
    {
        $listsongs[$i]['id'] = $rs->fields['id'];
        $listsongs[$i]['title'] = $rs->fields['title'];
        $listsongs[$i]['singer'] = $rs->fields['singer'];
        $listsongs[$i]['view'] = $rs->fields['view'];
        $i++;
        $rs->MoveNext();
    }
    $smarty->assign('listsongs',$listsongs);
    $smarty->display('listsong.tpl');
}

function noibat()
{
    global $conn, $smarty;
    $noibat = array();
    $i=0;
    $rs = $conn->Execute("SELECT id, title, singer, view FROM song ORDER BY view DESC LIMIT 10");
    while(!$rs->EOF)
    {
        $noibat[$i]['id'] = $rs->fields['id'];
        $noibat[$i]['title'] = $rs->fields['title'];
        $noibat[$i]['singer'] = $rs->fields['singer'];
        $noibat[$i]['view'] = $rs->fields['view'];
        $i++;
        $rs->MoveNext();
    }
    $smarty->assign('noibats',$noibat);
    $smarty->display('noibat.tpl');
}

function player($type,$url)
{
    if($type == 1)
    {
        //echo getlinkzing($url);
        return '<script type="text/javascript" src="../static/js/html5-player.js"></script>
                <div class="player">
                    <div class="hide-html5">
                        <audio id="audio" controls="controls">
                            <source src="'.getlinkzing($url).'" type="audio/mpeg">
                        </audio>
                    </div>
                    <div id="play" class="play control"></div>
                    <div id="progress">
                        <div id="progress_box">
                            <div id="load_progress" style="width:0px;">
                                <div class="hand-control" id="hand_progress" style="left:-7px;"></div>
                                <div id="play_progress" style="width:0px;"></div>
                            </div>
                        </div>
                    </div>
                    <div id="play_time"><span id="current_time_display">00:00</span></div>
                </div>
                <script type="text/javascript">
                    bodyLoaded();
                    document.getElementById("audio").addEventListener("ended",
                	    function () {
                	        playAudio();
                	    }, false);
                </script>';
    }
}




function getlinkzing($url)
{
    $is_zingmp3_old = (preg_match("#http://mp3.zing.vn/mp3/nghe-bai-hat/(.*?).html#s",$url,$zing_old_id));
    $is_zingmp3 = (preg_match("#mp3.zing.vn/bai-hat#s",$url));
    if($is_zingmp3_old)
    {
        $zing_old_id = $zing_old_id[1];
        $zing_old_id = str_replace(".","/",$zing_old_id);
        $zing_url = "http://mp3.zing.vn/bai-hat/".$zing_old_id.".html";
        $z = cUrl($zing_url);
        $z_xml = explode('xmlURL=',$z);
        $z_xml = explode('&amp;textad',$z_xml[2]);
        $z_xml = cUrl($z_xml[0]);
        $z_xml = explode('<source><![CDATA[',$z_xml);
        $z_xml = explode(']]></source>',$z_xml[1]);
        return $z_xml[0];
    }
}

function cUrl($link)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);
    return $contents;
}


//$is_zs = (preg_match("#http://www(.*?).zippyshare.com/v/(.*?)/file.html#s",$link,$zs_id));
//$is_zingmp3 = (preg_match("#mp3.zing.vn#s",$link));
//$is_nct = (preg_match("#nhaccuatui.com#s",$link));
//$is_youtube = (preg_match("#youtube.com#s",$link));
//$is_nhacvui = (preg_match("#nhac.vui.vn#s",$link));

?>