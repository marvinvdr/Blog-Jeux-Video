<?php
$sql = "SELECT articleID, titre, contenu, dateArt, catID, auteur, image
FROM article
WHERE catID = :id";
$result = $dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
$sql2 = "SELECT *
FROM categorie
WHERE catID = :id";
$result2 = $dbh->prepare($sql2);
$result2->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result2->execute();
$test=true;
if($result->rowCount())
{
$test=true; 
}
else
{
	$test=false;
}

 
