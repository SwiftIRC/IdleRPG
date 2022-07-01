<?php /* Smarty version Smarty-3.1.12, created on 2013-06-17 20:03:43
         compiled from "/var/www/clients/client1/web6/web/public/templates/Default/world.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184421733751bf6b9f63ebf8-60723654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cdfad0428c8e73250379f81570b854dedbcc154' => 
    array (
      0 => '/var/www/clients/client1/web6/web/public/templates/Default/world.tpl',
      1 => 1364570286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184421733751bf6b9f63ebf8-60723654',
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
  'unifunc' => 'content_51bf6b9f65a1a2_34082821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf6b9f65a1a2_34082821')) {function content_51bf6b9f65a1a2_34082821($_smarty_tpl) {?><div class="container content">
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