<?php

session_start();
$updateId = $_SESSION['update_id'];

require '../data/db-connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['pseudo'])){
    if(!empty($_POST['pseudo'])){
        $pseudo = $_POST['pseudo'];
        $pseudo = escapeCharacters($pseudo);
        $dbh->query("UPDATE score SET score_name = $pseudo WHERE score_id = $updateId;");
    }
}

header('Location: /ranking.php');
exit;