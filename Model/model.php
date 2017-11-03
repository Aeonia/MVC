 <?php
//from create-pdo
function initDatabase() {
	try {
	  require __DIR__.'/config.php';

	  $pdo = new PDO(
	    "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
	  );
	} catch (PDOException $e) {
	  echo 'erreur : ' . $e->getMessage();

	  $pdo = null;
	}
//les noms n'ont de valeur que dans la fonction où ils sont déclarés
	return $pdo;
}
function prepareStatement($sql) {
  	$pdo_statement = null;

  	$pdo = initDatabase();

  	if ($pdo) {
		try {
		  $pdo_statement = $pdo->prepare($sql);
		} catch (PDOException $e) {
		  echo 'erreur : ' . $e->getMessage();
		}
	}
//les noms n'ont de valeur que dans la fonction où ils sont déclarés
	return $pdo_statement;
}

//from index
function fetchData() {
	$todos = [];

	$pdo_statement = prepareStatement('SELECT * FROM todos WHERE deleted_at IS NULL');

	if ($pdo_statement && $pdo_statement->execute()) {
		$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
	}

	return $todos;
}
