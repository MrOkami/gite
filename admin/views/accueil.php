<?php
$title = "ACCUEIL";
require "core/Gites.php";
//Instance de la classe gites
$gite = new Gites();
$gite->checkDateGite();
?>
    <div id="conteneur-accueil" class="container">

        <h1 class="text-center text-info">NOS GITE EN LOCATION</h1>

        <h2 class="text-danger">Recherche</h2>

        <form method="post">
            <input type="search" name="recherche" class="form-control" />
            <br />
            <button type="submit" name="btn-search-name" class="btn btn-info">Valider la recherche</button>
        </form>

        <?php
        if(isset($_POST['btn-search-name'])){
            $gite->searchGiteByName();
        }
        ?>


        <!--MODIFIER LE LIENS ET LE ROUTER-->
        <form action="index.php?url=search"  method="post">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="date_arrivee">Date d'arrivée</label>
                        <input type="date"  name="date_arrivee" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date_depart">Date de depart</label>
                        <input type="date"  name="date_depart" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="nbr_chambre">Nombre de chambre</label>
                        <select class="form-control" name="nbr_chambre" id="nbr_chambre">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                    <br />
                    <button name="btn_search" type="submit" class="btn btn-outline-warning mt-2">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
<?php




$gite->avalableGite();
