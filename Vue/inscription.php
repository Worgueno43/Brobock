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
                  <a href="index.php?page=inscription" class="btn btn-outline-warning btn-lg">Inscription</a>
                </div>
                <div class="col-xs-12 col-sm-2">
                </div>
                <div class="col-xs-12 col-sm-4">
                  <a href="index.php?page=connexion" class="btn btn-outline-warning btn-lg">Connexion</a>
                </div>
                <div class="col-xs-12 col-sm-1">
                </div>
              </div>

              <h1>________________________</h1>
              <br>

              <h2 class="text-uppercase text-center" style="color:#FFAA2A"> Inscription</h2>
              <form method="POST" action="index.php?page=/../Controler/ControlerB&param=Inscription">
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Nom<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="nom" id="nom" required data-validation-required-message="Entrer votre Nom" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Prenom<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="prenom" id="prenom" required data-validation-required-message="Entrer votre Prenom" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label> Age<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="age" id="age" required data-validation-required-message="Entrer votre Âge" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <h4 class="text" style="color:#888680">Sexe *</h4>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexe" id="1" value="1">
                      <label class="form-check-label" style="color:#FFAA2A" for="inlineRadio1">Homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexe" id="2" value="2">
                      <label class="form-check-label" style="color:#FFAA2A" for="inlineRadio2">Femme</label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label> Pseudo<span class="req">*</span> </label>
                  <input type="text" class="form-control" name="pseudo" id="pseudo" required data-validation-required-message="Entrer votre Pseudo" autocomplete="off">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <label> Mot de passe<span class="req">*</span> </label>
                  <input type="password" class="form-control" name="mdp" id="mdp" required data-validation-required-message="Entrer votre Mot de Passe" autocomplete="off">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <label> E-Mail<span class="req">*</span> </label>
                  <input type="email" class="form-control" name="mail" id="mail" required data-validation-required-message="Entrer votre Numéro de E-Mail" autocomplete="off">
                  <p class="help-block text-danger"></p>
                </div>
                <br>
                <div class="row">
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <h4 class="text" style="color:#888680">Pays *</h4>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <?php
                      if (isset($_POST['IDP'])) {
                        $pays = $_POST["IDP"];
                      } else {
                        if (isset($_GET["IDP"])) {
                          $pays = $_GET["IDP"];
                        } else {
                          $pays = "";
                        }
                      }
                      listederoulante($dbh, 0, "IDP", "pays", "IDP", "LIBELLEP", $pays);
                      ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <label> Code Postal<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="cp" id="cp" required data-validation-required-message="Entrer votre Code Postal" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-9">
                    <div class="form-group">
                      <label> Ville<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="ville" id="ville" required data-validation-required-message="Entrer votre Ville" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label> Adresse<span class="req">*</span> </label>
                  <input type="text" class="form-control" name="adresse" id="adresse" required data-validation-required-message="Entrer votre Adresse" autocomplete="off">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="mrgn-30-top">
                  <button type="submit" class="btn btn-larger btn-block">
                    S'INSCRIRE
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</section>