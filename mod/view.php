<?php
$sql = "SELECT articleID, titre, contenu, dateArt, article.catID, auteur, image, categorie.catID, nomCat
FROM article
LEFT JOIN categorie ON article.catID = categorie.catID
WHERE articleID = :id";

$result = $dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
