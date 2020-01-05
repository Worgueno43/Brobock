<?php
require_once(dirname(__FILE__) . '/../Fonctions/FonctionsBD.php');
require_once(dirname(__FILE__) . '/../Fonctions/OutilsDivers.php');
//Etape 1 : Creation d'un objet de connexion à la base de données activites
$Pdo = PdoActivite::getPdoActivite();
if (isset($_REQUEST["param"])) {
	$param = $_REQUEST["param"];
	switch ($param) {

			//Affiche les bières

		case 'AfficherBiere': {
				$lesLignes = $Pdo->afficheBiere();
				include(dirname(__FILE__) . '/../Vue/biere.php');
				break;
			}

			//Validation de la connexion au site

		case 'ValidConnexion': {
				$login = $_REQUEST['username'];
				$mdp = $_REQUEST['password'];
				$Pdo->conecterSession($login, $mdp);
				header('Location: http://localhost/Bro_bock/index.php?page=connexion');
				break;
			}

			//Deconnexion au site

		case 'Deconnexion': {
				$Pdo->decoSession();
				header('Location: http://localhost/Bro_bock/index.php?page=connexion');
				break;
			}

			//Inscription au site

		case 'Inscription': {
				$nom = $_REQUEST['nom'];
				$prenom = $_REQUEST['prenom'];
				$pseudo = $_REQUEST['pseudo'];
				$mail = $_REQUEST['mail'];
				$motdep = $_REQUEST['mdp'];
				$age = $_REQUEST['age'];
				$sexe = $_REQUEST['sexe'];
				$pays = $_REQUEST['IDP'];
				$cp = $_REQUEST['cp'];
				$ville = $_REQUEST['ville'];
				$adresse = $_REQUEST['adresse'];
				$Pdo->inscription($nom, $prenom, $pseudo, $mail, $motdep, $age, $sexe, $pays, $cp, $ville, $adresse);
				header('Location: http://localhost/Bro_bock/index.php?page=inscription');
				break;
			}

			//Ajout de bière

		case 'AjoutBiere': {
				$IMGBIERE = $_REQUEST['IMGBIERE'];
				$IDC = $_REQUEST['IDC'];
				$IDM = $_REQUEST['IDM'];
				$NOMB = $_REQUEST['NOMB'];
				$PRIXL = $_REQUEST['PRIXL'];
				$DATECREA = $_REQUEST['DATECREA'];
				$TAUXA = $_REQUEST['TAUXA'];
				$Pdo->ajoutBiere($IMGBIERE, $IDC, $IDM, $NOMB, $PRIXL, $DATECREA, $TAUXA);
				header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherBiere');
			}

			//Suppression de bière

		case 'SupprimerBiere': {
				$IDB = $_REQUEST['numBiere'];
				$Pdo->supprimeBiere($IDB);
				header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherBiere');
			}

			//Modification de bière

		case 'ModifBiere': {
				$IDB = $_REQUEST['IDB'];
				$NOMB = $_REQUEST['NOMB'];
				$PRIXL = $_REQUEST['PRIXL'];
				$DATECREA = $_REQUEST['DATECREA'];
				$TAUXA = $_REQUEST['TAUXA'];
				$Pdo->modifBiere($IDB, $NOMB, $PRIXL, $DATECREA, $TAUXA);
				header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherBiere');
			}

			//Ajout de Categorie

		case 'AjoutCateg': {
			$LIBELLEC = $_REQUEST['LIBELLEC'];
			$Pdo->ajoutCateg($LIBELLEC);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherCateg');
		}

			//Affiche les Catégorie

		case 'AfficherCateg': {
			$lesCat = $Pdo->afficheCateg();
			include(dirname(__FILE__) . '/../Vue/categorie.php');
			break;
		}

			//Suppression de catégorie

		case 'SupprimerCateg': {
			$IDC = $_REQUEST['numCateg'];
			$Pdo->supprimeCateg($IDC);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherCateg');
		}

			//Modification de catégorie

		case 'ModifCateg': {
			$IDC = $_REQUEST['IDC'];
			$LIBELLEC = $_REQUEST['LIBELLEC'];
			$Pdo->modifCateg($IDC, $LIBELLEC);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherCateg');
		}

			//Ajout de Marque

		case 'AjoutMarque': {
			$LIBELLEM = $_REQUEST['LIBELLEM'];
			$Pdo->ajoutMarque($LIBELLEM);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherMarque');
		}

			//Affiche les Marques

		case 'AfficherMarque': {
			$lesMarque = $Pdo->afficheMarque();
			include(dirname(__FILE__) . '/../Vue/marque.php');
			break;
		}

			//Suppression de Marque

		case 'SupprimerMarque': {
			$IDM = $_REQUEST['numMarque'];
			$Pdo->supprimeMarque($IDM);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherMarque');
		}

			//Modification de Marque

		case 'ModifMarque': {
			$IDM = $_REQUEST['IDM'];
			$LIBELLEM = $_REQUEST['LIBELLEM'];
			$Pdo->modifMarque($IDM, $LIBELLEM);
			header('Location: http://localhost/Bro_bock/index.php?page=/../Controler/ControlerB&param=AfficherMarque');
		}

		default: {
				include 'index.php';
				break;
			}
	}
}
