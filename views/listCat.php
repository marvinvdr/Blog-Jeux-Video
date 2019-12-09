<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <h1>Liste des categories</h1>
         <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
            {
            ?>
         <a href="?param=addCat" class="btn btn-primary">Ajouter catégorie</a>
         <?php
            }
            ?>
         <table class="table">
            <tr>
               <?php
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                           { ?> 
               <th>catID</th>
               <?php
                  }
                  ?>
               <th>Nom</th>
               <?php 
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                  { ?> 
               <th>Editer</th>
               <th>Suprimmer</th>
            </tr>
            <?php
               }
               ?>
            <?php
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
            <tr>
               <?php
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                  {
                  ?>
               <td><?=$row["catID"] ?></td>
               <?php
                  }
                  ?>
               <!--<td><?=$row["nomCat"] ?></td>-->
               <td><a href="?param=viewCat&id=<?=$row["catID"] ?>"><?=$row["nomCat"] ?></a></td>
               <?php  
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                  { ?> 
               <td><a href="?param=editCat&id=<?=$row["catID"] ?>"><i class="fas fa-edit"></i></a></td>
               <td><a href="?param=delCat&id=<?=$row["catID"]?>"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php
               }
                       }
                       ?>
         </table>
      </div>
   </div>
</div>