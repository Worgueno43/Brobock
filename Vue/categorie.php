<section class="bodyb">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<br>
				<div align="center">
					<h1 class="titre" style="color:#FFAA2A">Nos catégories</h1>
				</div>

				<br><br>
				<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherCateg">
					<?php
					echo '<table class="table table-hover table-dark">';
					echo '<thead>';
					echo "<tr class='centrer'><th  scope='col'><font color='#FFAA2A'>Nom</font></th><th  scope='col'><font color='#FFAA2A'>Modifier</font><th  scope='col'><font color='#FFAA2A'>Supprimer</font></th></tr>";
					echo '<tbody>';
					foreach ($lesCat as $unecateg) {
						$IDC = $unecateg['IDC'];
						$LIBELLEC = $unecateg['LIBELLEC'];

						echo "<tr><td class='centrer'>" . $LIBELLEC . "</td>";
						?>
					</form>
					<?php
					echo "<td class='centrer'><a href='index.php?page=modifcateg&IDC=" . $IDC . "&LIBELLEC=" . $LIBELLEC . "'><i class='fas fa-edit' style='color:#FFAA2A'></i></a></td>";
					?>
					<form method="POST" action="index.php?page=/../Controler/ControlerB&param=AfficherCateg">
					<td class='centrer'><a href="index.php?page=/../Controler/ControlerB&param=SupprimerCateg&numCateg=<?php echo $IDC ?>" onclick="return confirm('Voulez-vous supprimer cette Catégorie ?');"><i class='fas fa-trash-alt' style='color:#FFAA2A'></i></a></td>
						<?php
						echo "</td></tr>";
					}
					if (isset($_SESSION["droit"])) {
						if ($_SESSION["droit"] > 0) {
							echo "<tr>";
							echo "<td class='centrer'><a href='index.php?page=ajoutcateg'><i class='fas fa-plus' style='color:#FFAA2A'></i></a></td>";
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
				<div class="col-sm-3">				
			</div>
		</div>
	</div>
</section>