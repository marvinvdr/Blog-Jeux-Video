<?php 
if(!empty($_POST['titre']))
{
    if(!empty($_POST['contenu']))
    {
        if(!empty($_POST['catID']))
        {
            if(!empty($_FILES['image']))
            {
                if ($_FILES['image']['size'] <= 1000000000)
                {
                    $imgname = uniqid($_FILES['image']['name']);
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['image']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('JPG','JPEG', 'PNG', 'jpg', 'jpeg', 'png');
                    
                    if (in_array($extension_upload, $extensions_autorisees))
                    {
                        if(preg_match('#^[a-zA-Z0-9èéà"êî\']*$#', $_POST['titre']) && preg_match('#^[a-zA-Z0-9èéà"êî\']*$#', $_POST['contenu']))
                        {
                            // On peut valider le fichier et le stocker définitivement
                            $sql = "INSERT INTO article (titre, image, auteur, contenu, catID)
                            VALUES (:titre, :image, :auteur, :contenu, :catID)";
                            $result=$dbh->prepare($sql);
                            $result->bindValue('titre',$_POST['titre'], PDO::PARAM_STR);
                            $result->bindValue('auteur',$_SESSION['pseudo'], PDO::PARAM_STR);
                            $result->bindValue('contenu',$_POST['contenu'], PDO::PARAM_STR);
                            $result->bindValue('catID',$_POST['catID'], PDO::PARAM_INT);


                            $result->bindValue('image', $imgname ,PDO::PARAM_STR);
                            $result->execute();
                            
                            move_uploaded_file($_FILES['image']['tmp_name'],'public/images/'.$imgname);
                            header('location: ?param=listArticles&add=true');
                        }
                        else{
                            header('location: ?param=add&erreur=errchar');
                        }
                    }
                    else{
                        header('location: ?param=add&erreur=errext');
                    }
                }
                else{
                    header('location: ?param=add&erreur=errsize');
                }
            }
            else 
            {
                header('location: ?param=add&erreur=imgvide');
            }
        }
        else
        {
            header('location: ?param=add&erreur=catvide');
        }
    }
    else
    {
        header('location: ?param=add&erreur=contenuvide');
    }
}
else 
{
    header('location: ?param=add&erreur=titrevide');
}

