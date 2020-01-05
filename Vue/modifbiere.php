<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<section>
    <div id="form">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
                <div id="userform">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="signup">
                            <h2 class="text-uppercase text-center" style="color:#FFC107"> Modification des bières</h2>
                            <form method="POST" action="index.php?page=/../Controler/ControlerB&param=ModifBiere">        <h1>________________________</h1>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <p> Id </p>
                                            <input type="text" class="form-control" name="IDB" id="IDB" readonly value=" <?php if (isset($_GET["IDB"])) { echo $_GET["IDB"]; } ?>" 
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <p> Taux d'alcool </p>
                                            <input type="text" class="form-control" name="TAUXA" id="TAUXA" value=" <?php if (isset($_GET["TAUXA"])) { echo $_GET["TAUXA"]; } ?>">
                                            <p class="help-block text-danger"></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <p> Nom </p>
                                            <input type="text" class="form-control" name="NOMB" id="NOMB" value=" <?php if (isset($_GET["NOMB"])) { echo $_GET["NOMB"]; } ?>">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <p> Prix </p>
                                            <input type="text" class="form-control" name="PRIXL" id="PRIXL" value=" <?php if (isset($_GET["PRIXL"])) { echo $_GET["PRIXL"]; } ?>">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <p> Date de création </p>
                                            <input type="text" class="form-control" name="DATECREA" id="DATECREA" value=" <?php if (isset($_GET["DATECREA"])) { echo $_GET["DATECREA"]; } ?>">
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