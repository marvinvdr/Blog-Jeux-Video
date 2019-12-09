<?php
$sqlCat = "SELECT catID, nomCat FROM categorie";
$resultCat = $dbh->prepare($sqlCat);
$resultCat->execute();

$sql = "SELECT articleID, titre, auteur, contenu, image, dateArt, article.catID, categorie.catID, nomCat 
FROM article
LEFT JOIN categorie ON article.catID = categorie.catID 
WHERE articleID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();