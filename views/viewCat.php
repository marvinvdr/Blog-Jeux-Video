<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <?php
            if($test==true)
            {
            while ($ligne = $result2->fetch(PDO::FETCH_ASSOC)) 
            	{
            	?>
         <h1>Article(s) de la categorie <?=$ligne["nomCat"]?></h1>
         <table class="table">
            <tr>
               <th>Image</th>
               <th>Titre</th>
               <th>Contenu</th>
               <!--<th>Auteur</th>-->
               <th>Date</th>
               <?php 
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                  { ?> 
               <th>Editer</th>
               <th>Suprimmer</th>
            </tr>
            <?php
               }
               ?>
            </tr>
            <?php
               while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
               {
               ?>
            <tr>
               <td><img src="public/images/<?=$row["image"] ?>" alt="" width="50px" height="50px"></td>
               <td><a href="?param=view&id=<?=$row["articleID"] ?>"><?=$row["titre"] ?></a></td>
               <td><?=cutStringContent($row["contenu"]) ?></td>
               <!--<td><?=$row["auteur"] ?></td>-->
               <td><?= date('j/n/Y', strtotime($row['dateArt'])) ?></td>
               <?php  
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                  { ?> 
               <td><a href="?param=edit&id=<?=$row["articleID"] ?>"><i class="fas fa-edit"></i></a></td>
               <td><a href="?param=del&id=<?=$row["articleID"]?>&image=<?=$row["image"] ?>"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php
               }
               }
               }	
                      ?>
         </table>
         <?php 
            }
            else 
            {
            echo "Pas d'article dans cette categorie";
            }
             ?>
      </div>
   </div>
</div>

