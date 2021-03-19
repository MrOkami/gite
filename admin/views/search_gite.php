<?php
$title = "RECHERCHE";
require "core/Gites.php";

$gite = new Gites();
?>
<h1>Résultat de la recherche</h1>
<?php

$gite->sortGiteByDate();
?>
