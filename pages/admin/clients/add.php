<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_de_naissance']) && isset($_POST['adresse']) && isset($_POST['code_postal']) && isset($_POST['numero_de_telephone']) && isset($_POST['statut_marital_id'])) {
	
	App::getInstance()->getTable('client')->create([
		'nom'=> $_POST['nom'],
		'prenom'=> $_POST['prenom'],
		'date_de_naissance'=>$_POST['date_de_naissance'],
		'adresse'=>$_POST['adresse'],
		'code_postal'=>$_POST['code_postal'],
		'numero_de_telephone'=>$_POST['numero_de_telephone'],
		'statut_marital_id'=>$_POST['statut_marital_id']
		]);
	header('location: admin.php?p=clients.index');
}
?>
<form action="admin.php?p=clients.add" method="POST" class="form-group">
	<input type="text" name="nom" placeholder="nom" class="form-control">
	<input type="text" name="prenom" placeholder="prénom" class="form-control">
	<input type="date" name="date_de_naissance" placeholder="date_de_naissance" class="form-control">
	<input type="text" name="adresse" placeholder="adresse" class="form-control">
	<input type="text" name="code_postal" placeholder="code_postal" class="form-control">
	<input type="text" name="numero_de_telephone" placeholder="numero_de_telephone" class="form-control">
	<select name="statut_marital_id"  class="form-control">
		<?php foreach (App::getInstance()->getTable('statutmarital')->all() as $value) : ?>
			<option value="<?=$value->id?>"><?=$value->statut?></option>
		<?php endforeach ?>
	</select>
	<button type="submit" class="btn btn-success">Envoyer</button>
</form>