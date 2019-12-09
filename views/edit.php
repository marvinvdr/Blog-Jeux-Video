<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)){ 
            ?>
         <h1>Editer un article :</h1>
         <form action="?param=edit&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
            <input class="form-control" type="file" id="nouvelleimage" name="nouvelleimage" hidden>
            <div class="form-group">
               <p>Image actuelle :</p>
               <img src="public/images/<?=$row["image"]?>" alt="illustration">
               <input class="form-control" type="text" value="<?=$row["image"]?>" name="image" hidden>
            </div>
            <div class="form-group">
               <label for="image" >Nouvelle image :</label>
               <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="form-group">
               <label for="titre">Titre :</label>
               <input class="form-control" type="text" name="titre" value="<?=$row["titre"]?>" minlength="6">
            </div>
            <div class="form-group">
               <label for="catID">Categorie :</label>
               <select class="form-control" name="catID" id="catID">
                  <option value="<?=$row["catID"]?>" default><?=$row["nomCat"]?></option>
                  <?php
                     while ($rowCat = $resultCat->fetch(PDO::FETCH_OBJ))
                     {?>
                  <?php
                     if($row["catID"]!=$rowCat->catID)
                     {
                     	?>
                  <option value="<?=$rowCat->catID?>"><?=$rowCat->nomCat?></option>
                  <?php
                     }
                     ?>		
                  <?php
                     }
                        ?>
               </select>
            </div>
            <div class="form-group">
               <label for="contenu">Contenu :</label>
               <textarea class="form-control" name="contenu" minlength="20"><?=$row["contenu"]?></textarea>  
            </div>
            <div class="form-group">
               <input class="form-control" type="submit" value="Modifier" name="submit">
            </div>
         </form>
      </div>
   </div>
</div>
</div>
<?php
}

