<div class="container content">
				<div class="page-header">
					<h1>Player List</h1>
				</div>
				<table class="table table-hover table-striped">
					<tr>
						<th>Place</th>
						<th>Username</th>
						<th>Class</th>
						<th>Level</th>
						<th>Time To Level</th>
					</tr>
					{assign var=a value=1}
					{foreach from=$players item=i}
						<tr>
							<td>{$a++}</td>
							{if $i.online == 0}
								<td><a class="muted" href="{$link}/{$i.user}">{$i.user}</a></td>
							{else}
								<td><a href="{$link}/{$i.user}">{$i.user}</a></td>
							{/if}
							<td>{$i.class}</td>
							<td>{$i.level}</td>
							<td>{$i.ttl}</td>
						</tr>
					{/foreach}
				</table>
			</div>
