<?php /* Smarty version Smarty-3.1.12, created on 2013-08-30 23:14:02
         compiled from "/home/idlebot/idlebot/site/public/templates/Default/quest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12252584975221273a7d4174-08254599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe661e4ca5293ea0333e5df64d28da02a7f1267a' => 
    array (
      0 => '/home/idlebot/idlebot/site/public/templates/Default/quest.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12252584975221273a7d4174-08254599',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5221273a914f75_23001157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221273a914f75_23001157')) {function content_5221273a914f75_23001157($_smarty_tpl) {?><div class="container content">
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