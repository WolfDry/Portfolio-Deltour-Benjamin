<?php
//définir une classe
class Model
{
	//propriétés de la classe
	public $id;
	public $table;
	public $conf = "default";
	public $db;

	function  __construct()
	{
		//on fait appel à notre configuration bdd par défaut
		$conf = conf::$databases[$this->conf];

		try {
			$this->db = new PDO(
				'mysql:host=' . $conf['host'] . ';dbname=' . $conf['database'] . ';',
				$conf['login'],
				$conf['password'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')     //on force Mysql à se connecter en utf8
			);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	// function bindvalue($valeur, $statement)
	// {
	// 	$select_columns = "";
	// 	foreach ($valeur as $key => $value) {
	// 		$select_columns .= $key . ';';
	// 	}

	// 	$select_columns = substr($select_columns, 0, 1);
	// 	$select_columns = "SELECT " . $select_columns . " FROM " . $this->table . ' LIMIT 0, 1';

	// 	$stmt = $this->db->prepare($select_columns);

	// 	if ($stmt->execute()) {
	// 		$i = 0;
	// 		foreach ($valeur as $key => $values) {
	// 			$statement->bindValue(":key", $value, $stmt->getColumnMeta($i)["pdo_type"]);
	// 			$i++;
	// 		}
	// 	} else {
	// 		foreach ($valeur as $key => $values) {
	// 			$statement->bindValue(':key', $value);
	// 		}
	// 	}
	// }

	//read : un select sur clé primaire
	function read($fields = null)
	{
		if ($fields == null) {
			$fields = "*";
		}
		/* Exécute une requête préparée en passant un tableau de valeurs */
		$sql = 'SELECT ' . $fields . ' FROM ' . $this->table . ' WHERE id=:id';
		//echo $sql;
		$stmt = $this->db->prepare($sql);
		if ($stmt->execute(array(':id' => $this->id))) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			// echo "<PRE>";
			// print_r($data);
			// echo "</PRE>";
			foreach ($data as $key => $value) {
				//on peut créer "à la volée" les propriété de la classe
				$this->$key = $value;
			}
			//return $data;
		} else {
			echo "<br /> erreur SQL";
		}
	}

	//save : faire soit un insert, soit un update
	function save($data)
	{
		//echo "<PRE>";
		//print_r($data);
		//echo "</PRE>";
		//Si id vide
		if (empty($data['id'])) {
			//on fait un insert
			//echo "save INSERT<br>";
			unset($data["id"]);
			//requete attendue en binding
			//INSERT INTO categorie(name,ordre) VALUES (:name,:ordre)

			//construction de la requete SQL
			$sql = "INSERT INTO " . $this->table . " (";
			$values = "";
			foreach ($data as $key => $value) {
				$sql .= $key . ",";
				$values .= ":" . $key . ",";
			}
			//enleve la denriere virgule
			$sql = substr($sql, 0, -1);
			$values = substr($values, 0, -1);
			$sql .= ") VALUES (" . $values . ");";

			//echo $sql;
			$stmt = $this->db->prepare($sql);
			if ($stmt->execute($data)) {
				echo "insertion ok id :" . $this->db->lastinsertId();
				$this->id = $this->db->lastinsertId();
			} else {
				echo "<br /> erreur SQL";
			}
		} else {
			//on fait un update
			//echo "save UPDATE<br>";
			$this->id = $data["id"];
			unset($data["id"]);
			//requete attendue
			//UPDATE categorie SET name=:name,ordre=:ordre WHERE id=2

			//construction de la requete SQL
			$sql = "UPDATE " . $this->table . "  SET ";
			foreach ($data as $key => $value) {
				$sql .= $key . "=:" . $key . ",";
			}
			//enleve la denriere virgule
			$sql = substr($sql, 0, -1);
			$sql .= " WHERE id=" . $this->id . ";";

			//echo $sql;
			$sth = $this->db->prepare($sql);
			if ($sth->execute($data)) {
				echo "update ok ";
			} else {
				echo "<br /> erreur SQL";
			}
		}
	}

	//find : tout select  possible
	function find($data)
	{
		$fields = "*";
		$inner = " ";
		$condition = "1=1";
		$order = "id";
		$limit = " ";

		if (isset($data["fields"])) {
			$fields = $data["fields"];
		}
		if (isset($data["inner"])) {
			$inner = $data["inner"];
		}
		if (isset($data["condition"])) {
			$condition = $data["condition"];
		}
		if (isset($data["order"])) {
			$order = $data["order"];
		}
		if (isset($data["limit"])) {
			$limit = $data["limit"];
		}

		/* Exécute une requête préparée en passant un tableau de valeurs */
		$sql =	'SELECT ' . $fields .
			' FROM ' . $this->table .
			' ' . $inner .
			' WHERE ' . $condition .
			' ORDER BY ' . $order .
			' ' . $limit;
		//echo $sql;
		//préparation
		$stmt = $this->db->prepare($sql);


		// if (!empty($values))
		// 	$this->bindvalue($values, $stmt);

		if ($stmt->execute()) {
			$data = $stmt->fetchAll(PDO::FETCH_OBJ);
			// echo "<PRE>";
			// print_r($data);
			// echo "</PRE>";
			return $data;
		} else {
			echo "<br /> erreur SQL";
		}
	}


	function findfirst($data)
	{
		//retourne l'élément courant du tableau
		//print_r($data);
		return current($this->find($data));
	}


	//delete : suppression sur clé primaire
	function delete()
	{
		/* Exécute une requête préparée en passant un tableau de valeurs */
		$sql = 'DELETE FROM ' . $this->table . ' WHERE id=:id';
		//echo $sql;
		$stmt = $this->db->prepare($sql);
		if ($stmt->execute(array(':id' => $this->id))) {
			return true;
		} else {
			echo "<br /> erreur SQL";
			return false;
		}
	}
}
