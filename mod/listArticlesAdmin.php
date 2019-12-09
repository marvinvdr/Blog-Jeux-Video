<?php
 $sql = "SELECT articleID, titre, contenu, dateArt, article.catID, auteur, image, categorie.catID, nomCat
         FROM article
         LEFT JOIN categorie ON article.catID = categorie.catID";
$stmt = $dbh->query($sql);
