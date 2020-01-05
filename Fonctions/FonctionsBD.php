<?php
/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoActivite qui contiendra l'unique instance de la classe
 * @package default
 * @author A.C.
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class PdoActivite
{
	private static $serveur = 'mysql:host=localhost';
	private static $bdd = 'dbname=brobock';
	private static $user = 'root';
	private static $mdp = '';
	private static $monPdo;
	private static $monPdoActivite = null;

	/*	                    
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */
	private function __construct()
	{
		PdoActivite::$monPdo = new PDO(PdoActivite::$serveur . ';' . PdoActivite::$bdd, PdoActivite::$user, PdoActivite::$mdp);
		PdoActivite::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		PdoActivite::$monPdo = null;
	}
	public function donner()
	{
		return PdoActivite::$monPdo;
	}

	/**
	 * Fonction statique qui crée l'unique instance de la classe
	 * Appel : $instancePdoActivite = PdoActivite::getPdoActivite();
	 * @return l'unique objet de la classe PdoActivite
	 */
	public  static function getPdoActivite()
	{
		if (PdoActivite::$monPdoActivite == null) {
			PdoActivite::$monPdoActivite = new PdoActivite();
		}
		return PdoActivite::$monPdoActivite;
	}


	//  Connecter 

	function conecterSession($login, $mdp)
	{
		$req = "select * from utilisateur where PSEUDO = '" . $login . "' and MDP = '" . $mdp . "'";
		//echo $req;
		$res = PdoActivite::$monPdo->query($req);
		$laLigne = $res->fetch();
		if ($laLigne) {
			$_SESSION["id"] = $laLigne["IDU"];
			$_SESSION["pseudo"] = $laLigne["PSEUDO"];
			$_SESSION["droit"] = $laLigne["DROIT"];
		}
		return $laLigne;
	}

	// Deconnecter

	function decoSession()
	{
		unset($_SESSION["id"]);
		unset($_SESSION["pseudo"]);
		unset($_SESSION["droit"]);
		session_destroy();
	}

	// Inscription

	function inscription($nom, $prenom, $pseudo, $mail, $motdep, $age, $sexe, $pays, $cp, $ville, $adresse)
	{
		if ($age > '18') {
			$requete1 = "insert into adresse (IDP, CP, VILLE, COMPLEMENT)
		values ('$pays','$cp', '$ville', '$adresse')";

		PdoActivite::$monPdo->exec($requete1);
		$ida = PdoActivite::$monPdo->lastInsertId();
		$requete2 = "insert into utilisateur (IDA, IDS, NOMU, PRENOMU, MAIL, PSEUDO, MDP, AGE)
		values ('$ida','$sexe','$nom','$prenom','$mail','$pseudo','$motdep','$age')";

		//echo $requete1;
		//echo $requete2;

		PdoActivite::$monPdo->exec($requete2);
		}
		
	}


	// Afficher une Bière

	function afficheBiere()
	{
		$req = "select IDB, MARQUE.LIBELLEM, CATEGORIE.LIBELLEC, NOMB, PRIXL, DATECREA, TAUXA, IMGBIERE from BIERE INNER JOIN MARQUE ON MARQUE.IDM = BIERE.IDM INNER JOIN CATEGORIE ON CATEGORIE.IDC = BIERE.IDC WHERE 1=1";
		//echo $req;
		$res = PdoActivite::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	// Ajouter une Bière


	function ajoutBiere($IMGBIERE, $IDC, $IDM, $NOMB, $PRIXL, $DATECREA, $TAUXA)
	{
		$requete = "insert into biere (IDC, IDM, NOMB, PRIXL, DATECREA, TAUXA, IMGBIERE)
		values ('$IDC','$IDM', '$NOMB', '$PRIXL', '$DATECREA', '$TAUXA', 'img/ImgBiere/$IMGBIERE')";

		//echo $requete;

		PdoActivite::$monPdo->exec($requete);
	}

	// Modifier une Bière

	function modifBiere($IDB, $NOMB, $PRIXL, $DATECREA, $TAUXA)
	{
		$req = "UPDATE biere SET NOMB='$NOMB', PRIXL='$PRIXL', DATECREA='$DATECREA', TAUXA='$TAUXA'
		WHERE IDB='$IDB'";
		//echo $req;
		PdoActivite::$monPdo->exec($req);
	}

	// Supprimer une Bière

	function supprimeBiere($IDB)
	{
		$req = "delete from biere where IDB = $IDB ";
		echo $req;
		PdoActivite::$monPdo->exec($req);
	}

	// Ajout Catégorie
	function ajoutCateg($LIBELLEC)
	{
		$requete = "insert into categorie (LIBELLEC)
		values ('$LIBELLEC')";

		//echo $requete;

		PdoActivite::$monPdo->exec($requete);
	}

	// Afficher une Categorie

	function afficheCateg()
	{
		$req = "select IDC, LIBELLEC FROM categorie WHERE 1=1";
		//echo $req;
		$res = PdoActivite::$monPdo->query($req);
		$lesCat = $res->fetchAll();
		return $lesCat;
	}

	// Supprime Categorie

	function supprimeCateg($IDC)
	{
		$req = "delete from categorie where IDC = $IDC ";
		echo $req;
		PdoActivite::$monPdo->exec($req);
	}

	// Modifier une Categorie

	function modifCateg($IDC, $LIBELLEC)
	{
		$req = "UPDATE categorie SET LIBELLEC='$LIBELLEC'
		WHERE IDC='$IDC'";
		//echo $req;
		PdoActivite::$monPdo->exec($req);
	}

		// Ajout Marque

	function ajoutMarque($LIBELLEM)
	{
		$requete = "insert into marque (LIBELLEM)
		values ('$LIBELLEM')";
		//echo $requete;
		PdoActivite::$monPdo->exec($requete);
	}

	// Afficher une Marque

	function afficheMarque()
	{
		$req = "select IDM, LIBELLEM FROM marque WHERE 1=1";
		//echo $req;
		$res = PdoActivite::$monPdo->query($req);
		$lesMarque = $res->fetchAll();
		return $lesMarque;
	}

	// Supprime Marque

	function supprimeMarque($IDM)
	{
		$req = "delete from marque where IDM = $IDM ";
		//echo $req;
		PdoActivite::$monPdo->exec($req);
	}

	// Modifier une Marque

	function modifMarque($IDM, $LIBELLEM)
	{
		$req = "UPDATE marque SET LIBELLEM = '$LIBELLEM' WHERE IDM ='$IDM'";
		//echo $req;
		PdoActivite::$monPdo->exec($req);
	}

}
