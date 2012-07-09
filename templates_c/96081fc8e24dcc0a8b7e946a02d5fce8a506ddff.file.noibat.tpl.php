<?php /* Smarty version Smarty-3.1.10, created on 2012-07-02 14:38:39
         compiled from "C:\xampp\htdocs\project\templates\noibat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20634ff19411bfcac2-52475690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96081fc8e24dcc0a8b7e946a02d5fce8a506ddff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\templates\\noibat.tpl',
      1 => 1341232711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20634ff19411bfcac2-52475690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4ff19411c8bd37_99774293',
  'variables' => 
  array (
    'imageurl' => 0,
    'noibats' => 0,
    'baseurl' => 0,
    'noibat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff19411c8bd37_99774293')) {function content_4ff19411c8bd37_99774293($_smarty_tpl) {?>   
    <!--List song -->
 <div id="noibat">         
   <div class="title-main">
    <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-m.gif" width="13" height="13" align="baseline">
        Nghe nhiều
    </div>
<?php  $_smarty_tpl->tpl_vars['noibat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noibat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noibats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['noibat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['noibat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['noibat']->key => $_smarty_tpl->tpl_vars['noibat']->value){
$_smarty_tpl->tpl_vars['noibat']->_loop = true;
 $_smarty_tpl->tpl_vars['noibat']->iteration++;
 $_smarty_tpl->tpl_vars['noibat']->last = $_smarty_tpl->tpl_vars['noibat']->iteration === $_smarty_tpl->tpl_vars['noibat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['noibat']['last'] = $_smarty_tpl->tpl_vars['noibat']->last;
?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['noibat']['last']){?>
<div class="row bgmusic noborder">
<?php }else{ ?>
<div class="row bgmusic">
<?php }?>
    <h3>
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/song/<?php echo $_smarty_tpl->tpl_vars['noibat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['noibat']->value['title'];?>
</a></h3>
    <p>
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-singer.gif" width="12" height="11" border="0"> <?php echo $_smarty_tpl->tpl_vars['noibat']->value['singer'];?>

            <span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-head.gif" width="11" height="11" border="0">
                 <?php echo $_smarty_tpl->tpl_vars['noibat']->value['view'];?>

            </span>
    </p>
</div>

<?php } ?>

 <!--<div class="more"> 
    <a href="http://m.nhaccuatui.com/bai_hat.html">Xem thêm<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ico-more.gif" width="10" height="10" border="0" align="absmiddle"></a>
 </div> -->
 </div>
    <!--List song --><?php }} ?>