<?php
if(!empty($_POST['nomCat']))
{
    $sql = "INSERT INTO categorie (nomCat)
    VALUES (:nomCat)";
    $result=$dbh->prepare($sql);
    $result->bindValue('nomCat',$_POST['nomCat'], PDO::PARAM_STR);
    $result->execute();
    header('location: ?param=listCat&add=true');
}
else 
{
    header('location: ?param=listCat&add=erreur');
}