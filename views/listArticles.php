<!-- Page Content -->
<div class="container">
   <!-- Page Heading/Breadcrumbs -->
   <h1> Liste des articles</h1>
   <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
         <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
         <!-- Blog Post -->
         <div class="card mb-4">
            <img class="card-img-top" src="public/images/<?=$row["image"] ?>" alt="Card image cap" width="700px" height="300px">
            <div class="card-body">
               <h2 class="card-title"><a href="?param=view&id=<?=$row["articleID"] ?>"><?=$row["titre"] ?></a></h2>
               <p class="card-text"><?=cutStringContent($row["contenu"]) ?></p>
               <a href="?param=view&id=<?=$row["articleID"] ?>" class="btn btn-primary">Lire plus &rarr;</a>
            </div>
            <div class="card-footer text-muted">
               <p> Posté le <?= date('j/n/Y', strtotime($row['dateArt'])) ?> &nbsp;|&nbsp; Catégorie : <?=$row["nomCat"] ?> &nbsp;|&nbsp; Auteur : <?=$row["auteur"] ?></p>
            </div>
         </div>
         <?php } ?>
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
         <!-- Categories Widget -->
         <div class="card mb-4">
            <h5 class="card-header">Navigation</h5>
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-12">
                     <ul class="list-unstyled mb-0">
                        <li>
                           <a href="?param=search">Recherche</a>
                        </li>
                        <li>
                           <a href="?param=listCat">Catégories</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->
</div>
<!-- /.container -->

