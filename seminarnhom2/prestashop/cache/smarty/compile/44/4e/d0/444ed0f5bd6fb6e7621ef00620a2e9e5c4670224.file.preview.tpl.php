<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 18:43:34
         compiled from "/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/blockfacebook/views/admin/_configure/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13703845835437c56e21a322-14040878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '444ed0f5bd6fb6e7621ef00620a2e9e5c4670224' => 
    array (
      0 => '/home/vol8_1/byethost22.com/b22_15379008/htdocs/prestashop/modules/blockfacebook/views/admin/_configure/preview.tpl',
      1 => 1412941399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13703845835437c56e21a322-14040878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437c56e26e9c3_32931787',
  'variables' => 
  array (
    'facebook_js_url' => 0,
    'facebook_css_url' => 0,
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437c56e26e9c3_32931787')) {function content_5437c56e26e9c3_32931787($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['facebook_js_url']->value;?>
"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['facebook_css_url']->value;?>
" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo smartyTranslate(array('s'=>"Preview"),$_smarty_tpl);?>

	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
