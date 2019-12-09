<?php
$sql = "SELECT article.articleID, commentaire.articleID, comID, contenuCom, dateCom, membre.membreID, commentaire.membreID, pseudo
FROM commentaire
LEFT JOIN article ON commentaire.articleID = article.articleID
LEFT JOIN membre ON commentaire.membreID = membre.membreID
WHERE article.articleID = :id 
ORDER BY comID DESC
LIMIT 5";

$result = $dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();