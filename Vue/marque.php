<section class="bodyb">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<br>
				<div align="center">
					<h1 class="titre" style="color:#FFAA2A">Nos Marques</h1>
				</div>

				<br><br>
				<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherCateg">
					<?php
					echo '<table class="table table-hover table-dark">';
					echo '<thead>';
					echo "<tr class='centrer'><th  scope='col'><font color='#FFAA2A'>Nom</font></th><th  scope='col'><font color='#FFAA2A'>Modifier</font><th  scope='col'><font color='#FFAA2A'>Supprimer</font></th></tr>";
					echo '<tbody>';
					foreach ($lesMarque as $unemarque) {
						$IDM = $unemarque['IDM'];
						$LIBELLEM = $unemarque['LIBELLEM'];

						echo "<tr><td class='centrer'>" . $LIBELLEM . "</td>";
						?>
					</form>
					<?php
					echo "<td class='centrer'><a href='index.php?page=modifmarque&IDM=" . $IDM . "&LIBELLEM=" . $LIBELLEM . "'><i class='fas fa-edit' style='color:#FFAA2A'></i></a></td>";
					?>
					<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherMarqueMarque">
					<td class='centrer'><a href="index.php?page=/../Controler/ControlerB&param=SupprimerMarque&numMarque=<?php echo $IDM ?>" onclick="return confirm('Voulez-vous supprimer cette Catégorie ?');"><i class='fas fa-trash-alt' style='color:#FFAA2A'></i></a></td>
						<?php
						echo "</td></tr>";
					}
							echo "<tr>";
							echo "<td class='centrer'><a href='index.php?page=ajoutmarque'><i class='fas fa-plus' style='color:#FFAA2A'></i></a></td>";
							echo "<td></td><td></td></tr>";
					
					
					
					
				
					
					
					
					
					

					echo '</tbody>';
					echo '</thead>';
					echo "</table>";

					echo "<br><br>";
					?>
				</form>
					</div>
				<div class="col-sm-3">				
			</div>
		</div>
	</div>
</section>