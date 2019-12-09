<?php
$sql = "SELECT *
FROM categorie
WHERE catID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
