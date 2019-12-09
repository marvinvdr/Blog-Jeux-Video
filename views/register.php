<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <?php
            if(isset($_GET['erreur'])){
              if($_GET['erreur'] == "pseudoexiste")
              {
                ?>
         <div class="alert alert-danger" role="alert">
            Ce pseudo est déjà pris !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "emailexiste")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Cette email est déjà inscrite !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "mdppasidentique")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Les mot de passes ne sont pas identiques !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "charinvalidepseudooumdp")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Le pseudo et le mot de passe ne peuvent contenir que des lettre [a-zA-Z0-9] !
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "mdpvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veullez remplir le champ mot de passe.
         </div>
         <?php
            }
            else if ($_GET['erreur'] == "emailvide")
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veullez remplir le champ email.
         </div>
         <?php
            }
            else 
            {
              ?>
         <div class="alert alert-danger" role="alert">
            Veullez remplir le champ pseudo.
         </div>
         <?php
            }
            
            }
            ?>
         <h1>Inscription :</h1>
         <form action="?param=register" method="post">
            <div class="form-group">
               <label for="pseudo">Pseudo :</label>
               <input  type="text" class="form-control" name="pseudo" minlength="6">
            </div>
            <div class="form-group">
               <label for="email">Email :</label>
               <input class="form-control"  type="text" name="email">
            </div>
            <div class="form-group">
               <label for="motdepasse">Mot de passe :</label>
               <input class="form-control" type="password" name="motdepasse" minlength="6">
            </div>
            <div class="form-group">
               <label for="motdepasse2">Retapez mot de passe :</label>
               <input class="form-control" type="password" name="motdepasse2" minlength="6">
            </div>
            <div class="form-group">
               <input class="form-control" type="submit" value="S'inscrire" name="submit">
            </div>
         </form>
      </div>
   </div>
</div>

