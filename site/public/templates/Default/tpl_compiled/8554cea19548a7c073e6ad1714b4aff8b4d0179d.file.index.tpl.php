<?php /* Smarty version Smarty-3.1.12, created on 2015-10-02 22:04:06
         compiled from "/srv/var/idlebot/site/public/templates/Default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423969074560eff565d3507-63498453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8554cea19548a7c073e6ad1714b4aff8b4d0179d' => 
    array (
      0 => '/srv/var/idlebot/site/public/templates/Default/index.tpl',
      1 => 1377903150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423969074560eff565d3507-63498453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_560eff569c60a0_11966599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560eff569c60a0_11966599')) {function content_560eff569c60a0_11966599($_smarty_tpl) {?><div class="container content">
				<div class="page-header">
					<h1>IdleRPG <small>#Idle</small></h1>
				</div>
				
				<div class="well">
					<h2>About</h2>
					<p>The Idle RPG is just what i sounds like; an RPG in which the players idle. In addition to merely gaining levels, players can find items and battle each other for buffs. However this is all done for you; you just need to idle. There are no set classes; you can name your character and its class anything you like.</p>
					<br>
					<p>Idle RPG can be played on the <a href="http://www.swiftirc.net/">SwiftIRC Network</a> in the channel <a href="http://qwebirc.swiftirc.net?channels=Idle">#Idle</a>.</p>
				</div>
			</div>
			
			<div class="container content">
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								Registering
							</a>
						</div>
						<div id="collapseOne" class="accordion-body collapse">
							<div class="accordion-inner">
								<p>To register, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." REGISTER <character name> <password> <character class>");?>
</pre>
								<ul>
									<li>Character Name: can be upto 16 letters long</li>
									<li>Password: Can be upto 8 letters long (Its suggested you use a seperate password for IdleRPG to your NickServ password)</li>
									<li>Character Class: Can be upto 30 letters long (Remember its automatically prefixed by 'the' so theres no need to include this in your class name)</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								Logging In
							</a>
						</div>
						<div id="collapseTwo" class="accordion-body collapse">
							<div class="accordion-inner">
								<p>To login, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." LOGIN <character name> <password>");?>
</pre>
								<p>This is a p0 command. (See <a href="#penalties">Penalties</a>)</p>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								Logging Out
							</a>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
							<div class="accordion-inner">
								<p>To logout, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." LOGOUT");?>
</pre>
								<p>This is a p20 command. (See <a href="#panalties">Penalties</a>)</p>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
								Changing Your Password
							</a>
						</div>
						<div id="collapseFour" class="accordion-body collapse">
							<div class="accordion-inner">
								<p>To change your password, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." NEWPASS <new password>");?>
</pre>
								<p>This ia a p0 command. (See <a href="#penalties">Penalties</a>)</p>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
								Removing Your Account
							</a>
						</div>
						<div id="collapseFive" class="accordion-body collapse">
							<div class="accordion-inner">
								<p><span class="label label-warning">Warning</span> This will completely remove all your account data. It <b>cannot</b> be recovered!<br><br>
								To remove your account, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." REMOVEME");?>
</pre>
								<p>This is a p0 command. (See <a href="#penalties">Penalties</a>)</p>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
								Changing Your Alignment
							</a>
						</div>
						<div id="collapseSix" class="accordion-body collapse">
							<div class="accordion-inner">
								<p>To change your alignment, simply type:</p>
								<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." ALIGN <good|neutral|evil>");?>
</pre>
								<p>This is a p0 command. (See <a href="#penalties">Penalties</a>)<br><br>
								Your alignment can affect certain aspects of the game. You may align with good, neutral or evil.</p>
								<ul>
									<li>Good: users have a 10% boost to their item sum for battles, and a 1 in 12 chance each day that they, along with a 'good' friend, will have the light of their god shine upon them, accelerating them 5-15% toward their next level. They also have a 1 in 50 chance of landing a <a href="#critstrike">Critical Strike</a> when battling.</li>
									<li>Evil: users have a 10% detriment to their item sum for battle, but have a 1 in 8 chance each day that they will either, attempt to steal an item from a 'good' user, or be forsaken (for 1-5% of their TTL) by their evil god. They also have a 1 in 20 chance of landing a <a href="#critstrike">Critical Strike</a> when battling.</li>
									<li>Neutral: no buffs. All users being as neutral characters</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container content">
				<div class="well">
					<h3>Levelling</h3>
					<p>To gain levels, you must only be logged in and idle. The time between levels is based on your character level, the higher your level, the longer your level up time. Its calculated using this forumla:</p>
					<pre>600 * (1.16 ^ LEVEL)</pre>
					<p>Very high levels are calculated differently. Levels of 60+ use the formula:</p>
					<pre>(600 * (1.16 ^ 60)) + ((1 day) * (LEVEL - 60))</pre>
				</div>
				<div class="well">
					<h3>Checking the Active Quest</h3>
					<p>To see the active quest, its users, and its time left to completion, simply type:</p>
					<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." QUEST");?>
</pre>
					<p>This is a p0 command. (See <a href="#penalties">Penalties</a>)</p>
				</div>
				<div class="well">
					<h3>Checking Your Online Status</h3>
					<p>To see whether you are logged in, simply type:</p>
					<pre><?php echo htmlspecialchars("/msg ".((string)$_smarty_tpl->tpl_vars['bot']->value)." WHOAMI");?>
</pre>
					<p>This is a p0 command. (See <a href="#penalties">Penalties</a>)</p>
				</div>
				<a name="penalties"></a>
				<div class="well">
					<h3>Penalties</h3>
					<p>If you do something other than idle, like part, quit, talk in the channel, change your nick or notice the channel, you are penalized. The penalties are time, in seconds, added to your next time to level and are based on your character level. The forulae are as follows:</p>
					<table class="table table-condensed">
						<tr>
							<td>Nick Change</td>
							<td>30 * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Part</td>
							<td>200 * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Quit</td>
							<td>20 * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Logout Command</td>
							<td>20 * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Being Kicked</td>
							<td>250 * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>MESSAGE_LENGTH * (1.14 ^ LEVEL)</td>
						</tr>
						<tr>
							<td>Notice</td>
							<td>MESSAGE_LENGTH * (1.14 ^ LEVEL)</td>
						</tr>
					</table>
					<p>Penalty shorthand is p[<i>NUM</i>]. So a nick change is a p30 penalty, parting the channel is a p200 penalty and quitting IRC is a p20 penalty. Messages and notices are p[<i>LENGTH OF MESSAGE</i>].</p>
				</div>
				<div class="well">
					<h3>Items</h3>
					<p>Each time your level, you find an item. You can find an items as high as 1.5 times your level (unless you find a <a href="#uniqueitems">Unique Item</a>). There are 10 types of items: Rings, Amulets, Charms, Weapons, Helmets, Tunics, Gloves, Leggings, Shields and Boots. You can find one of each type. When you find an item with a level higher than the level of the item you already have, you toss the old item and start using the new one.<br><br>
					As you may guess, you have a higher chance of rolling an items of lower value than you do of rolling one of a higher value level. This is the formula:<br><br>
					For each 'number' from 1, to (YOUR_LEVEL*1.5) you have a 1 / ((1.4)^number) chance to find an item at this level.<br><br>
					As for item type, there is an equal chance to roll any type.</p> 
				</div>
				<div class="well">
					<h3>Battle</h3>
					<p>Each time you level, if your level is less than 25, you have a 25% chance to challenge someone to combat. If your level is greater or equal to 25, you have a 100% chance to challenge someone. Your opponent is chosen randomly from those who are online. If there are no other players online, you fight no one. However if you do challenge someone, this is how the victor is decided.</p>
					<ol>
						<li>Your item levels are summed</li>
						<li>Their item levels are summed</li>
						<li>A random number between 0 and your item sum is taken</li>
						<li>A random number between 0 and their item sum is taken</li>
						<li>If your roll is larger than their, you win</li>
					</ol>
					<p>If you win, your time towards your next level is lowered. The amount that it is lowered is based on your opponent's level. The forumula is:</p>
					<pre>((the larger number between (OPPONENT_LEVEL / 4) and 7) / 100) * YOUR_TIME_TO_LEVEL</pre>
					<p>This means that you lose no less than 7% from your next time to level. If you win, your opponent is not penalized, unless you land a <a href="#critstrike">Critical Strike</a></p>
					<p>If you lose, you will be penalized. The penalty is calculated using this formula:</p>
					<pre>((the larger number between (OPPONENT_LEVEL / 7) and 7) / 100) * YOUR_TIME_TO_LEVEL</pre>
					<p>This means that you gain no less than 7% of your next time to level. If you lose, your opponent is not awarded.<p>
					<p>Battling the bot is a special case. The bot has an item sum on 1 + [highest item sum of all players]. The percent awarded if you win is a constant 20% and the percent penalized if you lose is a constant 10%.</p>
				</div>
				<a name="uniqueitems"></a>
				<div class="well">
					<h3>Unique Items</h3>
					<p>After level 25, you have a chance to roll items significantly higher than item you would normally find. These are unique items, they all have a 1 in 40 chance to roll.<br><br></p>
					<table class="table table-hover">
						<tr>
							<th>Name</th>
							<th>Item Level</th>
							<th>Required User Level</th>
						</tr>
						<tr>
							<td>Mattt's Omniscience Grand Crown</td>
							<td>50-74</td>
							<td>25</td>
						</tr>
						<tr>
							<td>Juliet's Glourious Ring of Sparkliness</td>
							<td>50-74</td>
							<td>25</td>
						</tr>
						<tr>
							<td>Res0's Protectorate Plate Mail</td>
							<td>75-99</td>
							<td>30</td>
						</tr>
						<tr>
							<td>Dwyn's Storm Magic Amulet</td>
							<td>100-124</td>
							<td>35</td>
						</tr>
						<tr>
							<td>Jotun's Fury Colossal Sword</td>
							<td>150-174</td>
							<td>40</td>
						</tr>
						<tr>
							<td>Drdink's Cane of Blind Rage</td>
							<td>175-200</td>
							<td>45</td>
						</tr>
						<tr>
							<td>Mrquick's Magical Boots of Swiftness</td>
							<td>250-300</td>
							<td>48</td>
						</tr>
						<tr>
							<td>Jeff's Cluehammer of Doom</td>
							<td>300-350</td>
							<td>52</td>
						</tr>				
					</table>
				</div>
				<div class="well">
					<h3>The Hand of God</h3>
					<p>The Hand of God can help or hurt your character by carrying it between 5% and 75% towards or away from its next time to level. The odds are in your favour, with an 80% chance to help your character, and 20% chance to harm them. Each player has a 1 in 20 chance of the Hand of God affecting them.</p>
				</div>
				<a name="critstrike"></a>
				<div class="well">
					<h3>Critical Strikes</h3>
					<p>If a challenger beats their opponent in battle, they have a 1 in 35 chance of landing a Critical Strike. If this occurs, the opponent is penalized towards their next time to level. This amount is calculated by this forumula:</p>
					<pre>((random number between 5 and 25) / 100) * OPPONENTS_NEXT_TIME_TO_LEVEL</pre>
					<p>Meaning they gain no less then 5% and no more than 25% of their next time to level.</p>
				</div>
				<div class="well">
					<h3>Team Battles</h3>
					<p>Every online user has a 1 in 4 chance per day of being involved in a 'team battle'. Team battles pit threee online players against three other online players. Each sides team are summed, and a winner is chosen the same as regular battling. If the first group bests the second group in combat, 20% of the lowest of the three's TTL is removed from their clocks. If the first group loses, 20% of their lowest member's TTL is added to their TTL.</p>
				</div>
				<div class="well">
					<h3>Calamities</h3>
					<p>Every online user has a 1 in 8 chance per day of a calamity occurring to them. A calamity is a bit of extremely bad luck that either; they are slowed 5-12% of their time to level, or lowers one of their items value by 10%.</p>
				</div>
				<div class="well">
					<h3>Godsends</h3>
					<p>Every online player has a 1 in 8 chance per day of a godsend occurring to them. A godsend is a bit of extremely good luck that either; they are accelerated 5-15% towards their next level, or increases one of their items value by 10%.</p>
				</div>
				<div class="well">
					<h3>Quests</h3>
					<p>Four level 40+ users that have been online for more than ten hours are chosen to represent and assist the Realm by going on a quest. If all four users make it to the quest's end, all questers are awarded by removing 25% of their time to level. To complete a quest, no user can be penalized until the quests end. <br><br>
					There are two types of quests, grid-based quests and time-based quests. Grid-based quests are based on the <a href="#gridsystem">Grid System</a> and do not have a set time for completion, Rather the questers must reach certain points on the map for their quest to be complete. Time-based quests last a random time between 12 and 24 hours. If a quest is not completed, <b>ALL</b> online users are penalized a p15 penalty.</p>
				</div>
				<div class="well">
					<h3>Grid System</h3>
					<p>IdleRPG has a grid system. The grid can be considered a 500x500 point map on which the players walk. Every second, each play has an equal chance to set up, down or neither, and an equal chance to steph left, right or neither. If a user encounters another player, there is a 1 / (NUMBER_OF_ONLINE_PLAYERS) chance that they will battle one another.<br><br>
					Some quests require that users walk to certain points of the map. In the spirit of IdleRPG, of course, the trek is made for you. Your character will automatically walk in the direction that it is supposed to, although at a much slower than normal pace.</p>
				</div>
				<div class="well">
					<h3>Item Stealing</h3>
					<p>After each battle, if the challenger wins, he has a 2% chance of stealing an items from the challengee. Only items of a higher value are stolen, and the challenger's old item is given to the challengee in a moment of pity.</p>
				</div>
			</div>
<?php }} ?>