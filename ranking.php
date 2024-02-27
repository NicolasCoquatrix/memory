<?php 

session_start();

require 'data/db-connect.php';

function timeCalcul($secondes){
    $chronometer = "";
    $hours = floor($secondes / 3600);
    if($hours>0){
        $chronometer .= str_pad($hours, 2, '0', STR_PAD_LEFT) . ":";
    }
    $minutes = floor(($secondes % 3600) / 60);
    if($minutes>0){
        $chronometer .= str_pad($minutes, 2, '0', STR_PAD_LEFT) . ":";
    }
    $secondes = $secondes % 60;
    $chronometer .= str_pad($secondes, 2, '0', STR_PAD_LEFT);
    return $chronometer;
}

$query = $dbh->query("SELECT * FROM difficulty");
$difficulties = $query->fetchAll();

$myScoreId = $_SESSION['update_id'];
$difficultyId = $_SESSION['difficulty_id'];

$title = "Classement";

$query = $dbh->query("SELECT * , RANK() OVER (ORDER BY score_moves, score_time) AS ranking FROM score WHERE difficulty_id = $difficultyId ORDER BY score_moves, score_time LIMIT 10;");
$scores = $query->fetchAll();

$query = $dbh->query("SELECT * FROM (SELECT *, RANK() OVER (ORDER BY score_moves, score_time) AS ranking FROM score) AS ranked_scores WHERE score_id = $myScoreId;");
$myScore = $query->fetch();

require 'templates/ranking.html.php';