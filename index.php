<?php 

require $_SERVER['DOCUMENT_ROOT'].'/data/db-connect.php';

$query = $dbh->query("SELECT * FROM difficulty");
$difficulties = $query->fetchAll();

$title = "Accueil";

$query = $dbh->query("SELECT * FROM playing_card ORDER BY RANDOM() LIMIT 3");
$cards = $query->fetchAll();

require 'templates/home.html.php';