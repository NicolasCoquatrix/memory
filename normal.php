<?php 

require 'data/db-connect.php';

$query = $dbh->query("SELECT * FROM difficulty");
$difficulties = $query->fetchAll();

$title = $difficulties[1]["difficulty_name"];

$query = $dbh->query("SELECT * FROM playing_card ORDER BY RAND() LIMIT 6");
$cards = $query->fetchAll();

require 'templates/game.html.php';