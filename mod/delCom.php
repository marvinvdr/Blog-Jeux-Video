<?php
    $sql="DELETE FROM commentaire WHERE comID=:id";
    $result=$dbh->prepare($sql);
    $result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
    $result->execute();

    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
    header('Location: ' . $referer);