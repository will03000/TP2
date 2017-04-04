<?php
namespace App\Table;

use Core\Table\Table;

/**
* 
*/
class ClientTable extends Table
{
	public function allWithStatut()
	{
		return $this->query("SELECT clients.id,
									clients.nom,
									clients.prenom,
									clients.date_de_naissance,
									clients.numero_de_telephone,
									clients.adresse,
									clients.code_postal,
									statutmaritals.statut as statut
							FROM clients
							LEFT JOIN statutmaritals
							ON statut_marital_id = statutmaritals.id
							");
	}

	public function findWithStatut($id)
	{
		return $this->query("SELECT clients.nom,
									clients.prenom,
									clients.date_de_naissance,
									clients.numero_de_telephone,
									clients.adresse,
									clients.code_postal,
									statutmaritals.statut as statut,
									credits.organisme, 
									credits.montant
		 							FROM clients 
		 							LEFT JOIN statutmaritals
									ON statut_marital_id = statutmaritals.id
									LEFT JOIN credits
									ON id_client = clients.id
		 							WHERE clients.id =".$_POST['id'] );
	}
}	