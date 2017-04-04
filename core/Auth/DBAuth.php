<?php
namespace Core\Auth;
use Core\Database\Database;
/**
* classe pour la connexion au site via une base de donné
*/
class DBAuth
{
	protected $db;
	function __construct(Database $db)
	{
		$this->db = $db;
	}

	public function login($username, $password)
	{
		$user = $this->db->prepare("SELECT * 
									FROM users 
									WHERE name = ?",
									[$username], null, true);
		if($user){
			if ($user->password === sha1($password)) {
				$_SESSION['Auth'] = $user->id;
				return true;
			}
		}
		return false;
	}

	public function logged()
	{
		return isset($_SESSION['Auth']);
	}

	public function getUserId()
	{
		if ($this->logged()) {
			return $_SESSION['Auth'];
		}else{
			return false;
		}

	}


}