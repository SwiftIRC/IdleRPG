<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 12:45:43
         compiled from "/var/www/clients/client1/web5/web/public/templates/Default/player.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116926175156de77da98b5-89586700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf40d0c19c51a158ab7d0f35cedf5073acc6a3b' => 
    array (
      0 => '/var/www/clients/client1/web5/web/public/templates/Default/player.tpl',
      1 => 1364570286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116926175156de77da98b5-89586700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player' => 0,
    'item' => 0,
    'key' => 0,
    'v' => 0,
    'pen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5156de77e2f851_19285624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5156de77e2f851_19285624')) {function content_5156de77e2f851_19285624($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>View Stats (<small>User <?php echo $_smarty_tpl->tpl_vars['player']->value['user'];?>
</small>)</h1>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<table class="table table-no-border">
							<tr>
								<th>User:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['user'];?>
</td>
							</tr>
							<tr>
								<th>Class:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['class'];?>
</td>
							</tr>
							<tr>
								<th>Level:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['level'];?>
</td>
							</tr>
							<tr>
								<th>Next Level:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['secs'];?>
</td>
							</tr>
							<tr>
								<th>Status:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['online'];?>
</td>
							</tr>
							<tr>
								<th>Host:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['host'];?>
</td>
							</tr>
							<tr>
								<th>Account Created:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['created'];?>
</td>
							</tr>
							<tr>
								<th>Last Login:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['lastlogin'];?>
</td>
							</tr>
							<tr>
								<th>Total Time Idled:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['idled'];?>
</td>
							</tr>
							<tr>
								<th>Current Position:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value['y'];?>
</td>
							</tr>
							<tr>
								<th>Alignment:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['player']->value['alignment'];?>
</td>
							</tr>
						</table>
					</div>
					<div class="span6">
						<div class="map">
							<img src="/<?php echo $_smarty_tpl->tpl_vars['player']->value['user'];?>
/playermap.png">
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<table class="table table-no-border">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<tr>
								<th><?php echo ucfirst($_smarty_tpl->tpl_vars['key']->value);?>
</th>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
							</tr>
						<?php } ?>
						</table>
					</div>
					<div class="span6">
						<table class="table table-no-border">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<tr>
								<th><?php echo ucfirst($_smarty_tpl->tpl_vars['key']->value);?>
</th>
								<td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
							</tr>
						<?php } ?>
						</table>
					</div>
				</div>
<?php }} ?>