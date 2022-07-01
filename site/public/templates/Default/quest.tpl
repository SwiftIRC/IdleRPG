<div class="container content">
				<div class="page-header">
					<h1>Quest</h1>
				</div>
				<div class="well">
					<h3>Current Objective</h3>
					<p>{$text}</p>
				</div>
				<div class="row-fluid">
					<div class="span6">
						{if $type == 1}
							<p><b>Time to completion:</b> {$ttc}</p><br>
						{elseif $type == 2}
							{if $stage == 1}
								<p><b>Current goal:</b> [{$p1.0}, {$p1.1}]</p>
							{else}
								<p><b>Current goal:</b> [{$p2.0}, {$p2.1}]</p>
							{/if}
						{/if}
						
						<p><b>Participant 1:</b> <a href="{$link}{$player.1.name}">{$player.1.name|htmlentities}</a>
						{if $type == 2}
							<b>Position:</b> [{$player.1.x}, {$player.1.y}]</p><br>
						{else}
							</p><br>
						{/if}
						
						<p><b>Participant 2:</b> <a href="{$link}{$player.2.name}">{$player.2.name|htmlentities}</a>
						{if $type == 2}
							<b>Position:</b> [{$player.2.x}, {$player.2.y}]</p><br>
						{else}
							</p><br>
						{/if}
						
						<p><b>Participant 3:</b> <a href="{$link}{$player.3.name}">{$player.3.name|htmlentities}</a>
						{if $type == 2}
							<b>Position:</b> [{$player.3.x}, {$player.3.y}]</p><br>
						{else}
							</p><br>
						{/if}
						
						<p><b>Participant 4:</b> <a href="{$link}{$player.4.name}">{$player.4.name|htmlentities}</a>
						{if $type == 2}
							<b>Position:</b> [{$player.4.x}, {$player.4.y}]</p><br>
						{else}
							</p><br>
						{/if}
					</div>
					
					{if $type == 2}
						<div class="span6">
							<h2>Quest Map:</h2>
							<p>Questers are shown in blue, current goal in red</p>
							<div class="map">
								<img src="questmap.png" alt="IdleRPG Quest Map" usemap="#quest">
							</div>
							<map id="quest" name="quest">
								<area shape="circle" coords="{$player.1.x},{$player.1.y},6" alt="{$player.1.name|htmlentities}" href="{$link}{$player.1.name|urlencode}" title="{$player.1.name|htmlentities}">
								<area shape="circle" coords="{$player.2.x},{$player.2.y},6" alt="{$player.2.name|htmlentities}" href="{$link}{$player.2.name|urlencode}" title="{$player.2.name|htmlentities}">
								<area shape="circle" coords="{$player.3.x},{$player.3.y},6" alt="{$player.3.name|htmlentities}" href="{$link}{$player.3.name|urlencode}" title="{$player.3.name|htmlentities}">
								<area shape="circle" coords="{$player.4.x},{$player.4.y},6" alt="{$player.4.name|htmlentities}" href="{$link}{$player.4.name|urlencode}" title="{$player.4.name|htmlentities}">
							</map>
						</div>
					{/if}
				</div>
					
			</div>
