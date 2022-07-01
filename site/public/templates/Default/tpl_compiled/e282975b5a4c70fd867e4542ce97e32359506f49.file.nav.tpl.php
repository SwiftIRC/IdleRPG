<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 12:43:42
         compiled from "/var/www/clients/client1/web5/web/public/templates/Default/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15467357005156ddfe36b803-33109076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e282975b5a4c70fd867e4542ce97e32359506f49' => 
    array (
      0 => '/var/www/clients/client1/web5/web/public/templates/Default/nav.tpl',
      1 => 1364570286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15467357005156ddfe36b803-33109076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5156ddfe39f830_31807959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5156ddfe39f830_31807959')) {function content_5156ddfe39f830_31807959($_smarty_tpl) {?><div class="container navbar-wrapper">
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