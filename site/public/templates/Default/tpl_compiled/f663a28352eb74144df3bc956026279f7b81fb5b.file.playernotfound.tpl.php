<?php /* Smarty version Smarty-3.1.12, created on 2013-11-26 19:31:52
         compiled from "/home/idlebot/idlebot/site/public/templates/Default/playernotfound.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2593225525294f7286556f0-37411963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f663a28352eb74144df3bc956026279f7b81fb5b' => 
    array (
      0 => '/home/idlebot/idlebot/site/public/templates/Default/playernotfound.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2593225525294f7286556f0-37411963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'not_found' => 0,
    'players' => 0,
    'a' => 0,
    'link' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5294f728884fd6_83222332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294f728884fd6_83222332')) {function content_5294f728884fd6_83222332($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>Player Not Found!</h1>
				</div>
				<div class="alert alert-error">
					The user <b><?php echo $_smarty_tpl->tpl_vars['not_found']->value;?>
</b> doesn't exist!
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
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</a></td>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['class'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['level'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ttl'];?>
</td>
						</tr>
					<?php } ?>
				</table>
			</div><?php }} ?>