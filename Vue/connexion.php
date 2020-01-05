<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<section>
  <div id="form">
    <div class="container">
      <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
        <div id="userform">
          <div class="tab-content">
            <div class="tab-pane fade active in" id="signup">
              <div class="row">
                <div class="col-xs-12 col-sm-1">
                </div>
                <div class="col-xs-12 col-sm-4">
                  <?php if (!isset($_SESSION["id"])) { ?>
                    <a href="index.php?page=inscription" class="btn btn-outline-warning btn-lg">Inscription</a>
                  <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-2">
                </div>
                <div class="col-xs-12 col-sm-4">
                  <?php if (!isset($_SESSION["id"])) { ?>
                    <a href="index.php?page=connexion" class="btn btn-outline-warning btn-lg">Connexion</a>
                  <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-1">
                </div>
              </div>
              <br>
              <?php if (isset($_SESSION["id"])) { ?>
                <br>
                <h2 class="text-uppercase text-center"> Deconnexion</h2>
                <h1>________________________</h1><br><br>
                <div align="center"><?php echo "Bonjour <b><i>" . $_SESSION["pseudo"] . "</i></b>"; ?></div><br><br><br>
                <a href="index.php?page=accueil">
                  <button type="submit" class="btn btn-larger btn-block">
                    ACCUEIL
                  </button><br><br>
                </a>

                <form method="POST" action="index.php?page=/../Controler/ControlerB&param=Deconnexion">
                  <button type="submit" class="btn btn-larger btn-block">
                    SE DECONNECTER
                  </button>
                </form>

              <?php } else { ?>
                <h1>________________________</h1>
                <br>
                <h2 class="text-uppercase text-center"> Connexion</h2>

                <form method="POST" action="index.php?page=/../Controler/ControlerB&param=ValidConnexion">

                  <div class="form-group">
                    <label> Pseudo<span class="req">*</span> </label>
                    <input type="tel" class="form-control" name="username" id="username" required data-validation-required-message="Entrer votre Pseudo" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label> Mot de passe<span class="req">*</span> </label>
                    <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Entrer votre Mot de Passe" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="mrgn-30-top">
                    <button type="submit" class="btn btn-larger btn-block">
                      SE CONNECTER
                    </button>
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
</section>