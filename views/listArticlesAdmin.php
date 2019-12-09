<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <h1> Liste des articles</h1>
         <a class="btn btn-primary" href="?param=add">Ajouter article</a>
         <table class="table">
            <tr>
               <th>Image</th>
               <th>Titre</th>
               <th>Contenu</th>
               <th>Catégorie</th>
               <th>Auteur</th>
               <th>Date</th>
               <th>Editer</th>
               <th>Suprimmer</th>
            </tr>
            <?php
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
            <tr>
               <td><img src="public/images/<?=$row["image"] ?>" alt="" width="50px" height="50px"></td>
               <td><?=$row["titre"] ?></td>
               <td><?=cutStringContent($row["contenu"]) ?></td>
               <td><?=$row["nomCat"] ?></td>
               <td><?=$row["auteur"] ?></td>
               <td><?= date('j/n/Y', strtotime($row['dateArt'])) ?></td>
               <td><a href="?param=edit&id=<?=$row["articleID"]?>"><i class="fas fa-edit"></i></a></td>
               <td><a href="?param=del&id=<?=$row["articleID"] ?>&image=<?=$row["image"] ?>"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php
               }
               ?>
         </table>
      </div>
   </div>
</div>

