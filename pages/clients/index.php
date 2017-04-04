<?php

$clients = App::getinstance()->getTable('Client')->allWithStatut();


?>
<h2 style="text-align: center;">Liste de tout les clients</h2>

<table class="table table-striped" style="margin-top: 50px;">
	<thead>
		<tr>
			<th>NOM</th>
			<th>Prénom</th>
			<th>Âge</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
		<tr>
			<td><?=$client->nom ?></td>
			<td><?=$client->prenom?></td>
			<td><?=$client->age ?></td>
			<td><form action="index.php?p=clients.detail" method="POST">
			<input type="hidden"   name="id" value="<?=$client->id?>" />
			<button class="btn btn-danger">Détails</button></form></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>