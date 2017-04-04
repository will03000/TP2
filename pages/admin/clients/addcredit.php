<?php
if (isset($_POST['organisme']) && isset($_POST['montant']) && isset($_POST['id_client'])) {
	App::getInstance()->getTable('credit')->create(['organisme'=> $_POST['organisme'],
		'montant'=> $_POST['montant'],
		'id_client'=>$_POST['id_client']]);
	header('location: admin.php?p=clients.index');
}
?>
<form action="admin.php?p=clients.addcredit" method="POST" class="form-group">
	<input type="text" name="organisme" placeholder="organisme" class="form-control">
	<input type="text" name="montant" placeholder="montant" class="form-control">
	<input type="text" name="id_client" placeholder="id_client" class="form-control">
	<button type="submit" class="btn btn-success">Envoyer</button>
</form>