<?php
$imgname = uniqid($_FILES['image']['name']);
$sql = "UPDATE article
SET titre=:titre, image=:image, contenu=:contenu, catID=:catID
WHERE articleID=:id";
$imgname = uniqid($_FILES['nouvelleimage']['name']);
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->bindValue('titre',$_POST['titre'], PDO::PARAM_STR);
$result->bindValue('contenu',$_POST['contenu'], PDO::PARAM_STR);
$result->bindValue('catID',$_POST['catID'], PDO::PARAM_INT);
$result->bindValue('image',!empty($_FILES['image']['name']) ? $imgname : $_POST['image'], PDO::PARAM_STR);

if(!empty($_FILES['image']))
{
    if ($_FILES['image']['size'] <= 1000000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('JPG','JPEG', 'PNG', 'jpg', 'jpeg', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On supprime l'ancienne image si ce n'est pas anonyme.png
            if($_POST['image'] != "anonyme.png")
            {
                unlink('public/images/'.$_POST['image']);
            }
            // On peut valider le fichier et le stocker définitivement          
            move_uploaded_file($_FILES['image']['tmp_name'],'public/images/'.$imgname);
            header('location: ?param=listArticlesAdmin&edit=success');
        }
        else{
            header('location: ?param=listArticles&edit=errext');
        }
    }
    else{
        header('?param=listArticles&edit=errsize');
    }
}
else 
{
    header('location: ?param=listArticles&edit=imgvide');
}

$result->execute();
header('Location: ?param=listArticlesAdmin&edit=true');