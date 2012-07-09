    
    <!--Top Menu -->   
<div class="topmenu">
    <a href="{$baseurl}/bay.html" title="Trang chủ">Trang chủ</a>
{foreach from=$arrmenu item=menu}
    <a href="{$baseurl}/index.php?cat={$menu.id}">{$menu.name}</a>
{/foreach}
</div>