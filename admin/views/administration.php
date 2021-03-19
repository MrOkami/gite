<?php

$title = "ADMINISTRATION";
require "core/Gites.php";

$gite = new Gites();



if(isset($_SESSION['connecter']) && $_SESSION['connecter'] === true){

    ?>
    <h1 class="text-center text-success">ADMINISTRATION</h1>
    <div class="text-center">
        <a href="index.php?url=insert_gites" class="btn btn-info">Ajouter un gite</a>
    </div>
    <?php
//Listage des gites
    $gite->getAllGiteAdmin();
}else{
    header('Location: http://localhost/gite/login');
}


?>





