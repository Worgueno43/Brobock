<?php
$serveur = "localhost";
$user = "root";
$pass = "";
$database = "brobock";
try {
	$dbh = new PDO('mysql:host=localhost;dbname=brobock', $user, $pass);
} catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}

function listederoulante($dbh, $vide, $name, $table, $id, $libelle, $selected, $finrequete = null)  //=null -> facultatif
	{	
	$requete = "select *
		FROM " . $table . "
		WHERE 1=1 " . $finrequete;
		//echo $requete;
		$sth = $dbh->prepare($requete);

		$sth->execute();
		$donnees = $sth->fetchAll();

		echo '<select class="btn btn-outline-warning dropdown-toggle btn-lg" name="' . $name . '">';
		if ($vide) {
			echo "<option value=''></option>";
		}
		foreach ($donnees as $d) {
			if ($d[$id] == $selected) {
				$correspondance = "selected";
			} else {
				$correspondance = "";
			}
			echo "<option " . $correspondance . " value='" . $d[$id] . "'>" . $d[$libelle] . "</option>";
		}
		echo '</select>';
	}

?>