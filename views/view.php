<?php   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {?>
<!-- Page Content -->
<div class="container">
<!-- Page Heading/Breadcrumbs -->
<h1><?=$row['titre']?></h1>
<div class="row">
<!-- Post Content Column -->
<div class="col-lg-8">
<!-- Preview Image -->
<img class="img-fluid rounded" src="public/images/<?=$row["image"] ?>" width="900" height="300" alt="">
<hr>
<!-- Date/Time -->
<p>Posté le <?= date('j/n/Y', strtotime($row['dateArt'])) ?> par <?=$row["auteur"] ?> </p>
<hr>
<!-- Post Content -->
<p><?=$row["contenu"] ?></p>
<p>Catégorie : <?=$row["nomCat"] ?></p>
<hr>
<!-- Comments Form -->
<div class="card my-4">
   <h5 class="card-header">Laisser un commentaire :</h5>
   <div class="card-body">
      <form action="?param=view&id=<?=$_GET['id']?>" method="POST">
         <div class="form-group">
            <textarea class="form-control" name="contenuCom" rows="3"></textarea>
         </div>
         <input type="hidden" name="articleID" value="<?=$_GET['id']?>">
         <?php 
            if(isset($_SESSION['role']))
            {
                echo '<input type="submit" name="submitCom" class="btn btn-primary" value="Envoyer">';
            } 
            else 
            {
               echo '<input type="submit" name="submitCom" class="btn btn-primary" value="Envoyer" disabled> &nbsp;<a href="?param=register">Inscris toi ici</a>';
            }
            ?>
      </form>
   </div>
</div>
<?php } ?>

