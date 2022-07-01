<?php /* Smarty version Smarty-3.1.12, created on 2015-10-02 22:04:06
         compiled from "/srv/var/idlebot/site/public/templates/Default/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580570657560eff564499d3-27581951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b8bef6985b5256da27adf49766c41a174831fd' => 
    array (
      0 => '/srv/var/idlebot/site/public/templates/Default/nav.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580570657560eff564499d3-27581951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_560eff564f03a6_47753266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560eff564f03a6_47753266')) {function content_560eff564f03a6_47753266($_smarty_tpl) {?><div class="container navbar-wrapper">
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