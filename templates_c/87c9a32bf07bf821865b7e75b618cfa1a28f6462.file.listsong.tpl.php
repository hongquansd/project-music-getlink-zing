<?php /* Smarty version Smarty-3.1.10, created on 2012-07-02 14:31:42
         compiled from "C:\xampp\htdocs\project\templates\listsong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303124feee7da0bcf05-95816588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c9a32bf07bf821865b7e75b618cfa1a28f6462' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\templates\\listsong.tpl',
      1 => 1341232300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303124feee7da0bcf05-95816588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feee7da13fbb8_66585787',
  'variables' => 
  array (
    'imageurl' => 0,
    'listsongs' => 0,
    'baseurl' => 0,
    'listsong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feee7da13fbb8_66585787')) {function content_4feee7da13fbb8_66585787($_smarty_tpl) {?>   
    <!--List song -->
 <div id="baihatmoi">         
   <div class="title-main">
    <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-m.gif" width="13" height="13" align="baseline">
        Bài hát mới
    </div>
<?php  $_smarty_tpl->tpl_vars['listsong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listsong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listsongs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listsong']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listsong']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listsong']->key => $_smarty_tpl->tpl_vars['listsong']->value){
$_smarty_tpl->tpl_vars['listsong']->_loop = true;
 $_smarty_tpl->tpl_vars['listsong']->iteration++;
 $_smarty_tpl->tpl_vars['listsong']->last = $_smarty_tpl->tpl_vars['listsong']->iteration === $_smarty_tpl->tpl_vars['listsong']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listsong']['last'] = $_smarty_tpl->tpl_vars['listsong']->last;
?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['listsong']['last']){?>
<div class="row bgmusic noborder">
<?php }else{ ?>
<div class="row bgmusic">
<?php }?>
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/song/<?php echo $_smarty_tpl->tpl_vars['listsong']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listsong']->value['title'];?>
</a></h3>
    <p>
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-singer.gif" width="12" height="11" border="0"> <?php echo $_smarty_tpl->tpl_vars['listsong']->value['singer'];?>

            <span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-head.gif" width="11" height="11" border="0">
                 <?php echo $_smarty_tpl->tpl_vars['listsong']->value['view'];?>

            </span>
    </p>
</div>

<?php } ?>

 <!--<div class="more"> 
    <a href="http://m.nhaccuatui.com/bai_hat.html">Xem thêm<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-more.gif" width="10" height="10" border="0" align="absmiddle"></a>
 </div>--> 
 </div>
    <!--List song --><?php }} ?>