   
    <!--List song -->
 <div id="noibat">         
   <div class="title-main">
    <img src="{$imageurl}/ico-m.gif" width="13" height="13" align="baseline">
        Nghe nhiều
    </div>
{foreach from=$noibats item=noibat name=noibat}
{if $smarty.foreach.noibat.last}
<div class="row bgmusic noborder">
{else}
<div class="row bgmusic">
{/if}
    <h3>
        <a href="{$baseurl}/song/{$noibat.id}">{$noibat.title}</a></h3>
    <p>
        
        <img src="{$imageurl}/ico-singer.gif" width="12" height="11" border="0"> {$noibat.singer}
            <span>
                <img src="{$imageurl}/ico-head.gif" width="11" height="11" border="0">
                 {$noibat.view}
            </span>
    </p>
</div>

{/foreach}

 <!--<div class="more"> 
    <a href="http://m.nhaccuatui.com/bai_hat.html">Xem thêm<img src="{$imageurl}/ico-more.gif" width="10" height="10" border="0" align="absmiddle"></a>
 </div> -->
 </div>
    <!--List song -->