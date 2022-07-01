<?php /* Smarty version Smarty-3.1.12, created on 2012-12-10 14:09:51
         compiled from "/var/www/clients/client2/web3/web/public/templates/Default/world.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87588983550c5ed2f9b48c1-39384973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba86f7fe7e8d3dfbf550688e9a6fe7fc05e6f09c' => 
    array (
      0 => '/var/www/clients/client2/web3/web/public/templates/Default/world.tpl',
      1 => 1355148344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87588983550c5ed2f9b48c1-39384973',
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
  'unifunc' => 'content_50c5ed2f9ed1e9_21167546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c5ed2f9ed1e9_21167546')) {function content_50c5ed2f9ed1e9_21167546($_smarty_tpl) {?><div class="container content">
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