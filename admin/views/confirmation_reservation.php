<?php

$title = "DÉTAILS";

echo "Votre gite est reserver";
require "core/Gites.php";
$db = new Gites();

$db->disabledGite();

