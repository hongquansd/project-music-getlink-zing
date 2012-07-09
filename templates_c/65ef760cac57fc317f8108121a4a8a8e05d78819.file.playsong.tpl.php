<?php /* Smarty version Smarty-3.1.10, created on 2012-07-02 14:20:00
         compiled from "C:\xampp\htdocs\project\templates\playsong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204184fefc18d3dfee4-85049862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ef760cac57fc317f8108121a4a8a8e05d78819' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\templates\\playsong.tpl',
      1 => 1341231541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204184fefc18d3dfee4-85049862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4fefc18d470116_35674472',
  'variables' => 
  array (
    'imageurl' => 0,
    'songinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fefc18d470116_35674472')) {function content_4fefc18d470116_35674472($_smarty_tpl) {?><div class="player-song">
        <h2>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-m.gif" width="13" height="13" border="0"> <?php echo $_smarty_tpl->tpl_vars['songinfo']->value['title'];?>

        </h2>
        <p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-singer.gif" width="12" height="11" border="0"> <a href="/tim_kiem?q=Tu%e1%ba%a5n+H%c6%b0ng&amp;b=singer"><?php echo $_smarty_tpl->tpl_vars['songinfo']->value['singer'];?>
</a> 
            <!--<span><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-kb.gif" width="12" height="12" border="0"> 192kbps</span>  -->
            <span><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-head.gif" width="11" height="11" border="0"> <?php echo $_smarty_tpl->tpl_vars['songinfo']->value['view'];?>
</span>
        </p>    
      
      <?php echo $_smarty_tpl->tpl_vars['songinfo']->value['player'];?>


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
    <div class="noteRing">Soạn: <strong>CAI [tên bài hát]</strong> gởi <strong>8336</strong> (3000đ) để được hướng dẫn làm nhạc chờ. </div><?php }} ?>