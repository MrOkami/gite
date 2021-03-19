<?php
$title = "DETAILS";

require "core/Gites.php";
$gites = new Gites();

?>
    <h1 class="text-center text-danger"><b>DÉTAILS</b></h1>
<?php
$id_gite = $_GET['id'];
$gites->getGiteById($id_gite);

//$gites->getCommentsByGite();

?>