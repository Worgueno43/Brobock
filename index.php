<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
echo '<link rel="stylesheet" href="css.fond.css" type="text/css" />';	
include 'Vue/entete.php';
include 'Vue/menu.php';
include 'Fonctions/OutilsDivers.php';

if (empty($_GET["page"])) {
	include (dirname(__FILE__).'/Vue/accueil.php');
} else {
	$page=$_REQUEST['page'];
	include (dirname(__FILE__).'/Vue/'.$page.'.php');
}
include 'Vue/pied.php';
?>