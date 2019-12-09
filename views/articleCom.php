<?php
   while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       ?> 
<div class="media mb-4">
   <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
   <div class="media-body">
      <h5 class="mt-0"><?=$row['pseudo']?></h5>
      <?=$row['contenuCom']?>
      <?php
         if(isset($_SESSION['role']))
         {
             if($_SESSION['role'] == 1)
             echo '<a href="?param=delCom&id='.$row["comID"].'&articleid='.$row["articleID"].'"><i class="fas fa-times"></i></a>';
         } 
         ?>
   </div>
</div>
<?php
   }
   ?>
</div>
      <div class="col-md-4">
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
</div>


