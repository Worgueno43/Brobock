<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<section>
  <div id="form">
    <div class="container">
      <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
        <div id="userform">

          <div class="tab-content">
            <div class="tab-pane fade active in" id="signup">
              <h2 class="text-uppercase text-center" style="color:#FFC107"> Ajout des Catégorie</h2>
              <form method="POST" action="index.php?page=/../Controler/ControlerB&param=AjoutCateg">
                <h1>________________________</h1>
                <br>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label> Nom de la Catégorie <span class="req">*</span> </label>
                      <input type="text" class="form-control" name="LIBELLEC" id="LIBELLEC" required data-validation-required-message="Entrer le nom de l'image" autocomplete="off">
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