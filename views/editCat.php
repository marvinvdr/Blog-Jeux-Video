<!-- Page Content -->
<div class="container">
   <!-- Page Heading/Breadcrumbs -->
   <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-12">
<h1>Editer une categorie</h1>
<?php while ($row = $result->fetch(PDO::FETCH_ASSOC))
   { 
           ?>
<form action="?param=editCat&id=<?=$_GET['id']?>" method="POST">
<div class="form-group">
   <input type="text" class="form-control" name="nomCat" value="<?=$row['nomCat']?>">
   </div>
   <input type="hidden" name="catID" value="<?=$row['catID']?>">
   <div class="form-group">
   <input type="submit"  class="form-control" name="submitCat2" value="Editer">
   </div>
</form>
<?php
   }
   ?>
</div>
</div>
</div>
