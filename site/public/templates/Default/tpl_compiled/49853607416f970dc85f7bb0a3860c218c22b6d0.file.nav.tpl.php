<?php /* Smarty version Smarty-3.1.12, created on 2012-12-01 12:22:10
         compiled from "/var/www/clients/client1/web7/web/public/templates/Default/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17740200750b9f6729aa929-82603476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49853607416f970dc85f7bb0a3860c218c22b6d0' => 
    array (
      0 => '/var/www/clients/client1/web7/web/public/templates/Default/nav.tpl',
      1 => 1354379600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17740200750b9f6729aa929-82603476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b9f6729c5c52_59612679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b9f6729c5c52_59612679')) {function content_50b9f6729c5c52_59612679($_smarty_tpl) {?><div class="container navbar-wrapper">
				<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<a class="brand" href="http://www.swiftirc.net/">SwiftIRC</a>
					
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="<?php echo $_smarty_tpl->tpl_vars['nav']->value['home'];?>
">
									<a href="<?php echo @URL;?>
">Home</a>
								</li>
								<li class="<?php echo $_smarty_tpl->tpl_vars['nav']->value['player'];?>
">
									<a href="<?php echo @URL;?>
players/">Player List</a>
								</li>
								<li class="<?php echo $_smarty_tpl->tpl_vars['nav']->value['world'];?>
">
									<a href="<?php echo @URL;?>
world/">World Map</a>
								</li>
								<li class="<?php echo $_smarty_tpl->tpl_vars['nav']->value['quest'];?>
">
									<a href="<?php echo @URL;?>
quest/">Quest Info</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
				<?php }} ?>