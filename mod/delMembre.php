<?php
$sql="DELETE FROM membre WHERE membreID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();
header('Location: ?param=listMembres&del=true');