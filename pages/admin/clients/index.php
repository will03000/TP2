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
			<th>Adresse</th>
			<th>Numéro de téléphone</th>
			<th>Statut</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
		<tr>
			<td><?=$client->nom ?></td>
			<td><?=$client->prenom?></td>
			<td><?=$client->age ?></td>
			<td><?=$client->adresse ?></td>
			<td><?=$client->numero_de_telephone ?></td>
			<td><?=$client->statut ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>