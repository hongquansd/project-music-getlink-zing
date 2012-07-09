<div class="player-song">
        <h2>
            <img src="{$imageurl}/ico-m.gif" width="13" height="13" border="0"> {$songinfo.title}
        </h2>
        <p>
            <img src="{$imageurl}/ico-singer.gif" width="12" height="11" border="0"> <a href="/tim_kiem?q=Tu%e1%ba%a5n+H%c6%b0ng&amp;b=singer">{$songinfo.singer}</a> 
            <!--<span><img src="{$imageurl}/ico-kb.gif" width="12" height="12" border="0"> 192kbps</span>  -->
            <span><img src="{$imageurl}/ico-head.gif" width="11" height="11" border="0"> {$songinfo.view}</span>
        </p>    
      
      {$songinfo.player}

      <div style="color:Red;text-align:center;padding:3px 0px;display:none;" id="notlogin"></div>
      <div class="pdlike">
            <input type="hidden" value="di4WcbRQsi" id="hdSong">
    	    <span>Đăng bởi: <a href="/tim_kiem?q=levietnguyen45&amp;b=poster">levietnguyen45</a></span>  	
            <a href="/thanh_toan?key=di4WcbRQsi&amp;mode=2">
            
                <input type="button" value="Tải bài hát" onclick="window.location ='/thanh_toan?key=di4WcbRQsi&amp;mode=2';return false;">
                       
             </a>
            <input type="button" value="Hết thích" id="btnLiked" onclick="userLikeSong('unlike')">        
        </div>
    </div>
    <div class="noteRing">Soạn: <strong>CAI [tên bài hát]</strong> gởi <strong>8336</strong> (3000đ) để được hướng dẫn làm nhạc chờ. </div>