<?php
session_start();
ob_start();

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "accueil";
}

if(!isset($_GET['url']) || empty($_GET['url'])){

}

if(isset($_GET['url']) === ''){
    $url = 'accueil';
}


if($url === 'accueil'){
    require 'views/accueil.php';
}elseif ($url === 'login'){
    require 'views/login.php';
}elseif ($url === 'logout'){
    require 'views/logout.php';
}elseif (isset($_SESSION['connecter']) && $_SESSION['connecter'] === true && $url === "administration"){
    require 'views/administration.php';
}elseif (isset($_SESSION['connecter']) && $_SESSION['connecter'] === true && $url === "insert_gites"){
    require "views/insert_gites.php";
}elseif ($url === "details" && isset($_GET['id']) && $_GET['id'] > 0){
    require "views/details.php";
}elseif (isset($_SESSION['connecter']) && $_SESSION['connecter'] === true && $url === "delete" && isset($_GET['id']) && $_GET['id'] > 0){
    require "views/delete.php";
}elseif (isset($_SESSION['connecter']) && $_SESSION['connecter'] === true && $url === "update" && isset($_GET['id']) && $_GET['id'] > 0){
    require "views/update.php";
}elseif ($url === "search"){
    require "views/search.php";
}elseif ($url === "search_gite"){
    require "views/search_gite.php";
}elseif ($url === "reservation" && isset($_GET['id']) && $_GET['id'] > 0){
    require 'views/reservation.php';
}elseif ($url === "confirmer_reservation"){
    require "views/confirmer_reservation.php";
}elseif ($url === "signup"){
    require "views/signup.php";
}


elseif($url !=  '#:[\w]+)#'){
    require 'views/404.php';
}



$content = ob_get_clean();
require "includes/template.php";