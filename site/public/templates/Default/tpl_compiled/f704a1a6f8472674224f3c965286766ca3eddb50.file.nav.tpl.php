<?php /* Smarty version Smarty-3.1.12, created on 2012-12-10 14:09:42
         compiled from "/var/www/clients/client2/web3/web/public/templates/Default/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95646865250c5ed264ee3d4-40068665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f704a1a6f8472674224f3c965286766ca3eddb50' => 
    array (
      0 => '/var/www/clients/client2/web3/web/public/templates/Default/nav.tpl',
      1 => 1355148341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95646865250c5ed264ee3d4-40068665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c5ed2650a0d6_78221701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c5ed2650a0d6_78221701')) {function content_50c5ed2650a0d6_78221701($_smarty_tpl) {?><div class="container navbar-wrapper">
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