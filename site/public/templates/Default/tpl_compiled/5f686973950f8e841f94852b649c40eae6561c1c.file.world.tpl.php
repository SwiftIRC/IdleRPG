<?php /* Smarty version Smarty-3.1.12, created on 2013-08-30 23:13:59
         compiled from "/home/idlebot/idlebot/site/public/templates/Default/world.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553695104522127375f7db3-19146003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f686973950f8e841f94852b649c40eae6561c1c' => 
    array (
      0 => '/home/idlebot/idlebot/site/public/templates/Default/world.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553695104522127375f7db3-19146003',
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
  'unifunc' => 'content_5221273763d3f9_60211518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221273763d3f9_60211518')) {function content_5221273763d3f9_60211518($_smarty_tpl) {?><div class="container content">
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