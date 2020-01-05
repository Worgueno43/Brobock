<nav role='navigation' id="mainnav">
	<br><br><br>
	<ul class="gap">
		<font size="4.5">
			<li><a href="index.php?page=accueil"><i class="fas fa-home" style='color:#FFAA2A'></i> Bro'Bock</a></li>
			<li><a href="index.php?page=histoire"><i class="fas fa-book-open" style='color:#FFAA2A'></i> Histoire</a></li>
			<li><a href="index.php?page=/../Controler/ControlerB&param=AfficherBiere"><i class="fas fa-beer" style='color:#FFAA2A'></i> Les Bières</a></li>
			<?php if (isset($_SESSION["droit"])) {
				if ($_SESSION["droit"] > 0) { ?>
					<li><a href="#?"><i class="fas fa-user-cog" style='color:#FFAA2A'></i> Admin</a>
						<ul class="niveau2">
							<li><a href="index.php?page=/../Controler/ControlerB&param=AfficherMarque"><i class="fas fa-registered" style='color:#FFAA2A'></i> Marque</a></li>
							<li><a href="index.php?page=/../Controler/ControlerB&param=AfficherCateg"><i class="fas fa-copyright" style='color:#FFAA2A'></i> Categ</a></li>
						</ul>
					</li>
				<?php }
		} ?>
			<li><a href="index.php?page=connexion"><i class="fas fa-address-card" style='color:#FFAA2A'></i> Compte</a></li>
	</ul>
</nav>

<div class="hamb">
	<a href="#"><i class="fas fa-bars" style='color:#FFAA2A'></i></a>
</div>

<canvas id="bubble"></canvas>