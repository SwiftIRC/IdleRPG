<div class="container content">
				<div class="page-header">
					<h1>Player Not Found!</h1>
				</div>
				<div class="alert alert-error">
					The user <b>{$not_found}</b> doesn't exist!
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
							<td><a href="{$link}/{$i.user}">{$i.user}</a></td>
							<td>{$i.class}</td>
							<td>{$i.level}</td>
							<td>{$i.ttl}</td>
						</tr>
					{/foreach}
				</table>
			</div>