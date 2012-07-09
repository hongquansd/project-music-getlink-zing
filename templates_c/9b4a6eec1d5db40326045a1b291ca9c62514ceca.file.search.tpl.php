<?php /* Smarty version Smarty-3.1.10, created on 2012-06-30 13:13:51
         compiled from "C:\xampp\htdocs\project\templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111274feedf6fedb4c0-36142616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4a6eec1d5db40326045a1b291ca9c62514ceca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\templates\\search.tpl',
      1 => 1341054797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111274feedf6fedb4c0-36142616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_4feedf6ff0b7c2_84214596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feedf6ff0b7c2_84214596')) {function content_4feedf6ff0b7c2_84214596($_smarty_tpl) {?> <!--Search -->
    
<div class="search" id="search">
	<div class="bgsearch">
    	<div class="pd-input">
            <input type="text" value="" class="input-search" onkeypress="return searchKeyPress(event);" id="txtSearchkey" name="txtSearchkey">
            <input type="button" class="btn-search" onclick="search(); return false;" id="btnSearch">
        </div>
    </div>
</div>  <?php }} ?>