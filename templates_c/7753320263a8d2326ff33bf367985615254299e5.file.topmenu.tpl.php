<?php /* Smarty version Smarty-3.1.10, created on 2012-07-02 14:18:21
         compiled from "C:\xampp\htdocs\project\templates\topmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252274feedf35030884-81532703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7753320263a8d2326ff33bf367985615254299e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\templates\\topmenu.tpl',
      1 => 1341231498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252274feedf35030884-81532703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feedf3507f7b7_24056702',
  'variables' => 
  array (
    'baseurl' => 0,
    'arrmenu' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feedf3507f7b7_24056702')) {function content_4feedf3507f7b7_24056702($_smarty_tpl) {?>    
    <!--Top Menu -->   
<div class="topmenu">
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bay.html" title="Trang chủ">Trang chủ</a>
<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/index.php?cat=<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
<?php } ?>
</div><?php }} ?>