<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<section>
  <div id="form">
    <div class="container">
      <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
        <div id="userform">

          <div class="tab-content">
            <div class="tab-pane fade active in" id="signup">
              <h2 class="text-uppercase text-center" style="color:#FFC107"> Administration des bières</h2>
              <form method="POST" action="index.php?page=/../Controler/ControlerB&param=AjoutBiere">
                <h1>________________________</h1>
                <br>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label> Image (url : nombiere.x)<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="IMGBIERE" id="IMGBIERE" required data-validation-required-message="Entrer le nom de l'image" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Nom<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="NOMB" id="NOMB" required data-validation-required-message="Entrer le nom de la bière" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Taux d'alcool<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="TAUXA" id="TAUXA" required data-validation-required-message="Entrer le taux d'alcool" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <br><br>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <h4 class="text" style="color:#888680">Catégorie <class="text" style="color:#DCB418">*</h4>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <?php
                      if (isset($_POST['IDC'])) {
                        $categ = $_POST["IDC"];
                      } else {
                        if (isset($_GET["IDC"])) {
                          $categ = $_GET["IDC"];
                        } else {
                          $categ = "";
                        }
                      }
                      listederoulante($dbh, 0, "IDC", "categorie", "IDC", "LIBELLEC", $categ)
                      ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <h4 class="text" style="color:#888680">Marque <class="text" style="color:#DCB418">*</h4>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <?php
                      if (isset($_POST['IDM'])) {
                        $marque = $_POST["IDM"];
                      } else {
                        if (isset($_GET["IDM"])) {
                          $marque = $_GET["IDM"];
                        } else {
                          $marque = "";
                        }
                      }
                      listederoulante($dbh, 0, "IDM", "marque", "IDM", "LIBELLEM", $marque);
                      ?>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Prix<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="PRIXL" id="PRIXL" required data-validation-required-message="Entrer le prix au litre" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label> Date de création<span class="req">*</span> </label>
                      <input type="text" class="form-control" name="DATECREA" id="DATECREA" required data-validation-required-message="Entrer la date de création de la bière" autocomplete="off">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>

                <div class="mrgn-30-top">
                  <button type="submit" class="btn btn-larger btn-block">
                    OK
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