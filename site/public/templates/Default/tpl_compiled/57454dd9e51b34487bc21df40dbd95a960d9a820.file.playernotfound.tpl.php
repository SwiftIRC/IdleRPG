<?php /* Smarty version Smarty-3.1.12, created on 2013-01-07 07:24:19
         compiled from "/var/www/clients/client2/web3/web/public/templates/Default/playernotfound.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91136864350ea7823e40207-63225885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57454dd9e51b34487bc21df40dbd95a960d9a820' => 
    array (
      0 => '/var/www/clients/client2/web3/web/public/templates/Default/playernotfound.tpl',
      1 => 1355148344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91136864350ea7823e40207-63225885',
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
  'unifunc' => 'content_50ea7823e82655_36162293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ea7823e82655_36162293')) {function content_50ea7823e82655_36162293($_smarty_tpl) {?><div class="container content">
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