<?php

session_start();
$updateId = $_SESSION['update_id'];

require $_SERVER['DOCUMENT_ROOT'].'/data/db-connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['pseudo'])){
    if(!empty($_POST['pseudo'])){
        $pseudo = $_POST['pseudo'];
        $pseudo = $dbh->quote($pseudo);
        $dbh->query("UPDATE score SET score_name = $pseudo WHERE score_id = $updateId;");
    }
}

header('Location: /ranking.php');
exit;