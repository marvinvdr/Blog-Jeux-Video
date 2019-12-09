<?php
 // REQUETE QUI VERIFIE SI LE PSEUDO EST DANS LA TABLE
 $sql  = "SELECT COUNT(*) AS `nbr` FROM membre WHERE pseudo = '".$_POST['pseudo']."'";
 $res  = $dbh->query($sql);
 $alorslogin  = $res->fetch(PDO::FETCH_ASSOC);

 // REQUETE QUI VERIFIE SI L EMAIL EST DANS LA TABLE
 $sql  = "SELECT COUNT(*) AS `nbr` FROM membre WHERE email = '".$_POST['email']."'";
 $res  = $dbh->query($sql);
 $alorsmail  = $res->fetch(PDO::FETCH_ASSOC);

 // SI LE CHAMP PSEUDO EXISTE
 if(!empty($_POST['pseudo'])){
     if(!empty($_POST['email'])){
         if(!empty($_POST['motdepasse'])){
             if(!empty($_POST['motdepasse2'])){
                 // SI LE LOGIN EXISTE EN BDD
                 if(!($alorslogin['nbr'] == 0)){
     
                     header('location: ?param=register&erreur=pseudoexiste');
                 }
                 // SINON SI L'EMAIL EXISTE EN BDD
                 else if (!($alorsmail['nbr'] == 0)) {
         
                     header('location: ?param=register&erreur=emailexiste');
                 }
                 // SINON SI LES MOTS DE PASSES NE SONT PAS LES MEMES
                 else if ($_POST['motdepasse'] != $_POST['motdepasse2']){
 
                 header('location: ?param=register&erreur=mdppasidentique');
                 }
                 // SINON ON AJOUTE LE MEMBRE
                 else
                 {
                     if(preg_match('#^[a-zA-Z0-9]*$#', $_POST['pseudo']) && preg_match('#^[a-zA-Z0-9]*$#', $_POST['motdepasse'])) {
                         if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                             $sql = "INSERT INTO membre (pseudo, email, motDePasse)
                                     VALUES (:pseudo, :email, :motdepasse) ";
                             $result = $dbh->prepare($sql);
                             $result->bindValue('pseudo', $_POST['pseudo'], PDO::PARAM_STR);
                             $result->bindValue('email', $_POST['email'], PDO::PARAM_STR);
                             $result->bindValue('motdepasse', password_hash($_POST['motdepasse'], PASSWORD_DEFAULT), PDO::PARAM_STR);
                             $result->execute();
                             header('location: ?param=listArticles');
                         }
                         else 
                         {
                             header('location: ?param=register&erreur=emailinvalide');
                         }
                     }
                     else 
                     {
                         header('location: ?param=register&erreur=charinvalidepseudooumdp');
                     }
                 }
             }
             else 
             {
                 header('location: ?param=register&erreur=mdpvide');
             }
         }
         else 
         {
             header('location: ?param=register&erreur=mdpvide');
         }
     }
     else 
     {
         header('location: ?param=register&erreur=emailvide');
     }
 }
 else 
 {
     header('location: ?param=register&erreur=pseudovide');
 }