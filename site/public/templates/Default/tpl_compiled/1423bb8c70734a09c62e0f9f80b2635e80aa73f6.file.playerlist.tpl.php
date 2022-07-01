<?php /* Smarty version Smarty-3.1.12, created on 2012-12-10 14:09:47
         compiled from "/var/www/clients/client2/web3/web/public/templates/Default/playerlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173499633050c5ed2b474482-39974637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1423bb8c70734a09c62e0f9f80b2635e80aa73f6' => 
    array (
      0 => '/var/www/clients/client2/web3/web/public/templates/Default/playerlist.tpl',
      1 => 1355148344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173499633050c5ed2b474482-39974637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'players' => 0,
    'a' => 0,
    'i' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c5ed2b4c0a55_71906510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c5ed2b4c0a55_71906510')) {function content_50c5ed2b4c0a55_71906510($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>Player List</h1>
				</div>
				<table class="table table-hover table-striped">
					<tr>
						<th>Place</th>
						<th>Username</th>
						<th>Class</th>
						<th>Level</th>
						<th>Time To Level</th>
					</tr>
					<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['a']->value++;?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['online']==0){?>
								<td><a class="muted" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</a></td>
							<?php }else{ ?>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</a></td>
							<?php }?>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['class'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['level'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ttl'];?>
</td>
						</tr>
					<?php } ?>
				</table>
			</div>
<?php }} ?>