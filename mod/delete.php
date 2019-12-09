<?php 
$sql="DELETE FROM article WHERE articleID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
unlink('public/images/'.$_GET['image']);


$sql="DELETE FROM commentaire WHERE articleID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();

header('Location: ?param=listArticlesAdmin');