<?php /* Smarty version Smarty-3.1.19, created on 2014-10-04 08:31:17
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/admin8270/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1388005160542f4de56cf303-29486680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81fa9d3402e97b4964d3414aa351cc329d0e3426' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/admin8270/themes/default/template/helpers/kpi/row.tpl',
      1 => 1412349232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388005160542f4de56cf303-29486680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542f4de56d5fa8_63022711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542f4de56d5fa8_63022711')) {function content_542f4de56d5fa8_63022711($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
