<?php
$sql= "SELECT membreID, pseudo, motDePasse, email, rol FROM membre WHERE email = :email";
$result = $dbh->prepare($sql);
$result->bindValue('email', $_POST['email'], PDO::PARAM_STR);
$result->execute();
$row = $result->fetch(PDO::FETCH_OBJ);

if(!empty($_POST['email'])){
        if(!empty($_POST['motDePasse'])){
            if($result->rowCount()){
                if(password_verify($_POST['motDePasse'], $row->motDePasse) == $_POST['motDePasse']){
                    // Création des variables de session
                    $_SESSION['role'] = $row->rol;   
                    $_SESSION['id'] = $row->membreID;         
                    $_SESSION['pseudo'] = $row->pseudo;      
                    header('location: ?param=listArticles&log=true');
                }
                else 
                {
                    header('location: ?param=login&erreur=passnonidentiques');
                }
            }
            else 
            {
                header('location: ?param=login&erreur=mailnonexistant');
            }
        }
        else 
        {
            header('location: ?param=login&erreur=passvide');
        }
}
else 
{
    header('location: ?param=login&erreur=mailvide');
}