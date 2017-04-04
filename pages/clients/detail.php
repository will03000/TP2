<?php

$clients = App::getInstance()->getTable("Client")->findWithStatut($_POST["id"]);

?>
<h2 style="text-align: center;">Liste de tout les clients</h2>



<table class="table table-striped" style="margin-top: 50px;">
	<thead>
		<tr>
			<th>NOM Prénom</th>
			<th>Âge</th>
			<th>Adresse complète</th>
			<th>Téléphone</th>
			<th>Statut</th>
			<th>Organisme</th>
			<th>Montant</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
		<tr>
			<td><?=$client->civilite ?></td>
			<td><?=$client->age ?></td>
			<td><?=$client->adressecomplete ?></td>
			<td><?=$client->numero_de_telephone ?></td>
			<td><?=$client->statut ?></td>
			<td><?=$client->organisme ?></td>
			<td><?=$client->montant ?> euros</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>