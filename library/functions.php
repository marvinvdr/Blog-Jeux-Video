<?php
// Fonction de connection a la base de donnée
function connect()
{
    $dsn = "mysql:host=localhost;dbname=blog;";
    $username = "blogAdmin";
    $password = "123abc";
    try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    return $dbh;
}

// Cut String content 130 chars
function cutStringContent($txt)
{
    if(strlen($txt) > 130 ){
        $txt = substr($txt, 0,130);
        $space = strrpos($txt, ' ');
        $txt = substr($txt, 0, $space);
        $txt .= ' ...';
    }
    return $txt;
}