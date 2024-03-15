<?php
try{
	$dbh = new PDO('sqlite:'.$_SERVER['DOCUMENT_ROOT'].'/data/db.sqlite');
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
	echo "Impossible d'accéder à la base de données : ".$e->getMessage();
	exit;
}
?>