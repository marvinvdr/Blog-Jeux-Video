<?php
$sql = "UPDATE membre
SET rol=:rol
WHERE membreID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->bindValue('rol',$_GET['rol'] == 0 ? 1 : 0, PDO::PARAM_INT);
$result->execute();
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);