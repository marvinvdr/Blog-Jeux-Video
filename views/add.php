<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
      <?php
            if(isset($_GET['erreur'])){
              if($_GET['erreur'] == "titrevide")
              {
                ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ titre !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "contenuvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ contenu !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "catvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ categorie !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "imgvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ image !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "errsize")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            La taille de l'image est trop grande !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "errchar")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Ne peut contenir que  ces caracteres [a-z A-Z, 0-9] !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "errmail")
            {
              ?>
         <div class="alert alert-danger" role="alert">
           Adresse email non valide !
         </div>
         <?php
            }
            else 
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Erreur d'extension image !
         </div>
         <?php
            }
            
            }
            ?>
         <h1>Ajouter un article :</h1>
         <form action="?param=add" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <label for="imgage">Image :</label>
               <input class="form-control" type="file" name="image" required>
            </div>
            <div class="form-group">
               <label for="titre">Titre :</label>
               <input class="form-control" type="text" name="titre" minlength="6">
            </div>
            <div class="form-group">
               <label for="catID">Categorie :</label>
               <select class="form-control" name="catID" id="catID">
                  <?php
                     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                         ?> 
                  <option value="<?=$row["catID"]?>"><?=$row["nomCat"]?></option>
                  <?php
                     }
                     ?>
               </select>
            </div>
            <div class="form-group">
               <label for="contenu">Contenu :</label>
               <textarea class="form-control" name="contenu" minlength="20"></textarea>  
            </div>
            <div class="form-group">
               <input class="form-control" type="submit" value="Ajouter" name="submit">
            </div>
         </form>
      </div>
   </div>
</div>

