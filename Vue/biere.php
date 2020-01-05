<section class="bodyb">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<br>
		<div align="center">
			<h1 class="titre" style="color:#FFAA2A">Nos bieres</h1>
		</div>
                <br><br>
				<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherBiere">
				<?php
					echo '<table class="table table-hover table-dark">';
					echo '<thead>';
					echo "<tr class='centrer'><th  scope='col'><font color='#FFAA2A'>Image</font></th><th  scope='col'><font color='#FFAA2A'>Nom</font></th><th scope='col'><font color='#FFAA2A'>Catégorie</font></th><th scope='col'><font color='#FFAA2A'>Marque</font></th><th scope='col'><font color='#FFAA2A'>Prix au litre</font></th><th scope='col'><font color='#FFAA2A'>Date de création</font></th><th scope='col'><font color='#FFAA2A'>Taux d'alcool</font></th>"; if (isset($_SESSION["droit"])) {if ($_SESSION["droit"] > 0) {echo"<th></th><th></th>";} }"</tr>";
					echo '<tbody>';
					foreach ( $lesLignes as $unebiere )
					{
						$id = $unebiere['IDB'];
						$ImgBiere = $unebiere['IMGBIERE'];
						$nom = $unebiere['NOMB'];
						$categ = $unebiere['LIBELLEC'];
						$marque = $unebiere['LIBELLEM'];
						$prix = $unebiere['PRIXL'];
						$date = $unebiere['DATECREA'];
						$taux = $unebiere['TAUXA'];

						echo "<tr><td><div class='zoom colonne'><div><img src=".$ImgBiere." width='100'></div></div></td>";
						echo "<td class='centrer'><br><br>".$nom."</td>";
						echo "<td class='centrer'><br><br>".$categ."</td>";
						echo "<td class='centrer'><br><br>".$marque."</td>";
						echo "<td class='centrer'><br><br>".$prix."</td>";
						echo "<td class='centrer'><br><br>".$date."</td>";
						echo "<td class='centrer'><br><br>".$taux."</td>";
						if (isset($_SESSION["droit"])) {
							if ($_SESSION["droit"] > 0) {
								?>
								</form> 
								<?php
								echo "<td><br><br><a href='index.php?page=modifbiere&IDB=" . $id . "&NOMB=" .$nom."&PRIXL=" .$prix. "&DATECREA=" .$date."&TAUXA=" .$taux."'><i class='fas fa-edit' style='color:#FFAA2A'></i></a></td>";
								?>
								<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherBiere">	
								<td><br><br><a href="index.php?page=/../Controler/ControlerB&param=SupprimerBiere&numBiere=<?php echo $id ?>" onclick="return confirm('Voulez-vous supprimer cette bière ?');"><i class='fas fa-trash-alt' style='color:#FFAA2A'></i></a></td>
								<?php
							}
						}
						echo "</td></tr>";
					}
					if (isset($_SESSION["droit"])) { 
						if ($_SESSION["droit"]>0) { 
							echo "<tr>";
							echo "<td class='centrer'><a href='index.php?page=ajoutbiere'><i class='fas fa-plus' style='color:#FFAA2A'></i></a></td>";
							echo "<td><td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td><td></td>";
							echo "<td></td><td></td></tr>";
						}
					}

					echo '</tbody>';
					echo '</thead>';
					echo "</table>";
				
				echo "<br><br>";
				?>
				</form>
		</div>
	</div>
</div>
</section>