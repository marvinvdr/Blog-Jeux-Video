<?php
   $sql = "SELECT * FROM article WHERE titre LIKE '%". $_POST["recherche"] ."%'";
   $stmt = $dbh->prepare($sql);
   $stmt->execute();
   $val = $stmt->rowCount();
   
   if(!empty($_POST["recherche"])){
      if($stmt->rowCount()){
         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
             ?>
<!-- Page Content -->
<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
         <a href='?param=view&id=<?=$row['articleID']?>'><?=$row["titre"]?></a>
      </div>
   </div>
</div>
<?php
      }
   }
   else {
   ?>
<!-- Page Content -->
<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
         <p>Pas de résultats pour cette recherche</p>
      </div>
   </div>
</div>
<?php
   }
}

