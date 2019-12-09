<?php
 $sql = "UPDATE categorie  SET nomCat=:nomCat WHERE catID=:id";
 $result=$dbh->prepare($sql);
 $result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
 $result->bindValue('nomCat',$_POST['nomCat'], PDO::PARAM_STR);
 $result->execute();
 header('Location: ?param=listCat&edit=true5');
