<?php /* Smarty version Smarty-3.1.12, created on 2012-12-04 07:01:04
         compiled from "/var/www/clients/client1/web7/web/public/templates/Default/quest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141609444750b9f6729c87c1-26321608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a19dc9a7ac2e6b4379a3aa73cdc43faf2d0fd9c' => 
    array (
      0 => '/var/www/clients/client1/web7/web/public/templates/Default/quest.tpl',
      1 => 1354604462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141609444750b9f6729c87c1-26321608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b9f672aa75a3_75252284',
  'variables' => 
  array (
    'text' => 0,
    'type' => 0,
    'ttc' => 0,
    'stage' => 0,
    'p1' => 0,
    'p2' => 0,
    'link' => 0,
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b9f672aa75a3_75252284')) {function content_50b9f672aa75a3_75252284($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>Quest</h1>
				</div>
				<div class="well">
					<h3>Current Objective</h3>
					<p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
							<p><b>Time to completion:</b> <?php echo $_smarty_tpl->tpl_vars['ttc']->value;?>
</p><br>
						<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
							<?php if ($_smarty_tpl->tpl_vars['stage']->value==1){?>
								<p><b>Current goal:</b> [<?php echo $_smarty_tpl->tpl_vars['p1']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['p1']->value[1];?>
]</p>
							<?php }else{ ?>
								<p><b>Current goal:</b> [<?php echo $_smarty_tpl->tpl_vars['p2']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['p2']->value[1];?>
]</p>
							<?php }?>
						<?php }?>
						
						<p><b>Participant 1:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['player']->value[1]['name'];?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[1]['name']);?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
							<b>Position:</b> [<?php echo $_smarty_tpl->tpl_vars['player']->value[1]['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value[1]['y'];?>
]</p><br>
						<?php }else{ ?>
							</p><br>
						<?php }?>
						
						<p><b>Participant 2:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['player']->value[2]['name'];?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[2]['name']);?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
							<b>Position:</b> [<?php echo $_smarty_tpl->tpl_vars['player']->value[2]['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value[2]['y'];?>
]</p><br>
						<?php }else{ ?>
							</p><br>
						<?php }?>
						
						<p><b>Participant 3:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['player']->value[3]['name'];?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[3]['name']);?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
							<b>Position:</b> [<?php echo $_smarty_tpl->tpl_vars['player']->value[3]['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value[3]['y'];?>
]</p><br>
						<?php }else{ ?>
							</p><br>
						<?php }?>
						
						<p><b>Participant 4:</b> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['player']->value[4]['name'];?>
"><?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[4]['name']);?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
							<b>Position:</b> [<?php echo $_smarty_tpl->tpl_vars['player']->value[4]['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value[4]['y'];?>
]</p><br>
						<?php }else{ ?>
							</p><br>
						<?php }?>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['type']->value==2){?>
						<div class="span6">
							<h2>Quest Map:</h2>
							<p>Questers are shown in blue, current goal in red</p>
							<div class="map">
								<img src="questmap.png" alt="IdleRPG Quest Map" usemap="#quest">
							</div>
							<map id="quest" name="quest">
								<area shape="circle" coords="<?php echo $_smarty_tpl->tpl_vars['player']->value[1]['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['player']->value[1]['y'];?>
,6" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[1]['name']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo urlencode($_smarty_tpl->tpl_vars['player']->value[1]['name']);?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[1]['name']);?>
">
								<area shape="circle" coords="<?php echo $_smarty_tpl->tpl_vars['player']->value[2]['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['player']->value[2]['y'];?>
,6" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[2]['name']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo urlencode($_smarty_tpl->tpl_vars['player']->value[2]['name']);?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[2]['name']);?>
">
								<area shape="circle" coords="<?php echo $_smarty_tpl->tpl_vars['player']->value[3]['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['player']->value[3]['y'];?>
,6" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[3]['name']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo urlencode($_smarty_tpl->tpl_vars['player']->value[3]['name']);?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[3]['name']);?>
">
								<area shape="circle" coords="<?php echo $_smarty_tpl->tpl_vars['player']->value[4]['x'];?>
,<?php echo $_smarty_tpl->tpl_vars['player']->value[4]['y'];?>
,6" alt="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[4]['name']);?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo urlencode($_smarty_tpl->tpl_vars['player']->value[4]['name']);?>
" title="<?php echo htmlentities($_smarty_tpl->tpl_vars['player']->value[4]['name']);?>
">
							</map>
						</div>
					<?php }?>
				</div>
					
			</div>
<?php }} ?>