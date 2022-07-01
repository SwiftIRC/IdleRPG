<div class="container content">
				<div class="page-header">
					<h1>View Stats (<small>User {$player.user}</small>)</h1>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<table class="table table-no-border">
							<tr>
								<th>User:</th>
								<td>{$player.user}</td>
							</tr>
							<tr>
								<th>Class:</th>
								<td>{$player.class}</td>
							</tr>
							<tr>
								<th>Level:</th>
								<td>{$player.level}</td>
							</tr>
							<tr>
								<th>Next Level:</th>
								<td>{$player.secs}</td>
							</tr>
							<tr>
								<th>Status:</th>
								<td>{$player.online}</td>
							</tr>
							<tr>
								<th>Host:</th>
								<td>{$player.host}</td>
							</tr>
							<tr>
								<th>Account Created:</th>
								<td>{$player.created}</td>
							</tr>
							<tr>
								<th>Last Login:</th>
								<td>{$player.lastlogin}</td>
							</tr>
							<tr>
								<th>Total Time Idled:</th>
								<td>{$player.idled}</td>
							</tr>
							<tr>
								<th>Current Position:</th>
								<td>{$player.x}, {$player.y}</td>
							</tr>
							<tr>
								<th>Alignment:</th>
								<td>{$player.alignment}</td>
							</tr>
						</table>
					</div>
					<div class="span6">
						<div class="map">
							<img src="/{$player.user}/playermap.png">
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<table class="table table-no-border">
						{foreach from=$item key=key item=v}
							<tr>
								<th>{$key|ucfirst}</th>
								<td>{$v}</td>
							</tr>
						{/foreach}
						</table>
					</div>
					<div class="span6">
						<table class="table table-no-border">
						{foreach from=$pen key=key item=v}
							<tr>
								<th>{$key|ucfirst}</th>
								<td>{$v}</td>
							</tr>
						{/foreach}
						</table>
					</div>
				</div>
