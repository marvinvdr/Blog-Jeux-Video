<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-12">
         <h1>Listes des membres</h1>
         <table class="table">
            <tr>
               <th>ID</th>
               <th>Pseudo</th>
               <th>Email</th>
               <th>Role</th>
               <th>Suprimmer</th>
            </tr>
            <?php
               while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               ?>
            <tr>
               <td><?=$row["membreID"] ?></td>
               <td><?=$row["pseudo"] ?></td>
               <td><?=$row["email"] ?></td>
               <td><a href="?param=editRole&id=<?=$row["membreID"]?>&rol=<?=$row["rol"] ?>"><?=$row["rol"] ?></a></td>
               <td><a href="?param=delMembre&id=<?=$row["membreID"] ?>"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php
               }
               ?>
         </table>
      </div>
   </div>
</div>

