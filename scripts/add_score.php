<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'].'/data/db-connect.php';

$query = $dbh->query("SELECT * FROM difficulty");
$difficulties = $query->fetchAll();

if(isset($_POST['moves_count'], $_POST['timer'])){
    $movesCount = $_POST['moves_count'];
    $timer = $_POST['timer'];
    $difficulty = $_POST['difficulty'];
    foreach($difficulties as $difficultie){
        if($difficulty == $difficultie["difficulty_name"]){
            $difficultyId = $difficultie["difficulty_id"];
            break;
        }
    }
    $query = $dbh->query("INSERT INTO score (score_name, score_moves, score_time, difficulty_id) VALUES ('Anonyme', $movesCount, $timer, $difficultyId);");
    $myScoreId = $dbh->lastInsertId();
    $_SESSION['update_id'] = $myScoreId;
    $pseudo = 'Anonyme' . $myScoreId;
    $dbh->query("UPDATE score SET score_name = '$pseudo' WHERE score_id = $myScoreId;");
    $_SESSION['difficulty_id'] = $difficultyId;
} else {
    header('Location: /');
}

header('Location: /end.php');
exit;