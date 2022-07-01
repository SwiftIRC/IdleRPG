<?php /* Smarty version Smarty-3.1.12, created on 2021-07-05 11:14:54
         compiled from "/var/www/reinze.com/idle/site/public/templates/Default/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212011205660e2e9aeac1e09-58364238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4d19b749abce0607966ba5852c206fe42588cb' => 
    array (
      0 => '/var/www/reinze.com/idle/site/public/templates/Default/nav.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212011205660e2e9aeac1e09-58364238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_60e2e9aeac8792_04548880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e2e9aeac8792_04548880')) {function content_60e2e9aeac8792_04548880($_smarty_tpl) {?><div class="container navbar-wrapper">
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