<?php 

session_start();

require $_SERVER['DOCUMENT_ROOT'].'/data/db-connect.php';

$myScoreId = $_SESSION['update_id'];

$query = $dbh->query("SELECT * FROM difficulty");
$difficulties = $query->fetchAll();

$query = $dbh->query("SELECT * FROM score INNER JOIN difficulty ON score.difficulty_id = difficulty.difficulty_id WHERE score_id = $myScoreId;");
$myScore = $query->fetch();

$myScoreSecondes = $myScore["score_time"];
$myTime = "";
$myTimeHours = floor($myScoreSecondes / 3600);
if($myTimeHours>0){
    $myTime .= str_pad($myTimeHours, 2, '0', STR_PAD_LEFT) . ":";
    if($myTimeHours>1){
        $myTimeHours .= " heures ";
    } else {
        $myTimeHours .= "heure ";
    }
}
$myTimeMinutes = floor(($myScoreSecondes % 3600) / 60);
if($myTimeMinutes>0){
    $myTime .= str_pad($myTimeMinutes, 2, '0', STR_PAD_LEFT) . ":";
    if($myTimeMinutes>1){
        $myTimeMinutes .= " minutes et ";
    } else {
        $myTimeMinutes .= " minute et ";
    }
}
$myTimeSecondes = $myScoreSecondes % 60;
$myTime .= str_pad($myTimeSecondes, 2, '0', STR_PAD_LEFT);
if($myTimeSecondes>1){
    $myTimeSecondes .= " secondes";
} else {
    $myTimeSecondes .= " seconde";
}

$title = "Félicitation";

require 'templates/end.html.php';