<?php
 $sql = "INSERT INTO commentaire (contenuCom, membreID, articleID)
 VALUES (:contenuCom, :membreID, :articleID)";
 $result=$dbh->prepare($sql);
 $result->bindValue('contenuCom',$_POST['contenuCom'], PDO::PARAM_STR);
 $result->bindValue('membreID', $_SESSION['id'], PDO::PARAM_INT);
 $result->bindValue('articleID', $_POST['articleID'], PDO::PARAM_INT);
 $result->execute();
 $postarticleid = $_POST['articleID'];
 header("location: ?param=view&id=$postarticleid");