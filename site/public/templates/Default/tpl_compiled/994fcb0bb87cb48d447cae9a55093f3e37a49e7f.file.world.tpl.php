<?php /* Smarty version Smarty-3.1.12, created on 2021-07-05 11:23:04
         compiled from "/var/www/reinze.com/idle/site/public/templates/Default/world.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65175976260e2eb9838b9f5-43741287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994fcb0bb87cb48d447cae9a55093f3e37a49e7f' => 
    array (
      0 => '/var/www/reinze.com/idle/site/public/templates/Default/world.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65175976260e2eb9838b9f5-43741287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map' => 0,
    'i' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_60e2eb983adb50_07736586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e2eb983adb50_07736586')) {function content_60e2eb983adb50_07736586($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>World Map</h1>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="map">
							<img src="/worldmap.png" alt="IdleRPG World Map" title="IdleRPG World Map" usemap="#world">
							<map id="world" name="world">
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<area shape="circle" coords="<?php echo $_smarty_tpl->tpl_vars['i']->value['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['i']->value['y'];?>
,4" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['i']->value['who']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
players/<?php echo $_smarty_tpl->tpl_vars['i']->value['who'];?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['i']->value['who']);?>
" />
								<?php } ?>
							</map>
						</div>
					</div>
				</div>
			</div><?php }} ?>