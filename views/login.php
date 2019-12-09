<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <?php
            if(isset($_GET['erreur'])){
              if($_GET['erreur'] == "passvide")
              {
                ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ mot de passe !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "mailvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veuillez remplir le champ email !
         </div>
         <?php
            }
            else 
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Adresse email ou mot de passe incorrect !
         </div>
         <?php
            }
            
            }
            ?>
         <h1>Connexion :</h1>
         <form action="?param=login" method="post">
            <div class="form-group">
               <label for="email">Email :</label>
               <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
               <label for="motDePasse">Mot de passe :</label>
               <input  type="password" class="form-control"  name="motDePasse">
            </div>
            <div class="form-group">
               <input  type="submit" class="form-control" value="Se connecter" name="submit">
            </div>
         </form>
      </div>
   </div>
</div>

