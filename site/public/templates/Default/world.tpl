<div class="container content">
				<div class="page-header">
					<h1>World Map</h1>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="map">
							<img src="/worldmap.png" alt="IdleRPG World Map" title="IdleRPG World Map" usemap="#world">
							<map id="world" name="world">
								{foreach from=$map item=i}
									<area shape="circle" coords="{$i.x},{$i.y},4" alt="{$i.who|htmlentities}" href="{$link}players/{$i.who}" title="{$i.who|htmlentities}" />
								{/foreach}
							</map>
						</div>
					</div>
				</div>
			</div>