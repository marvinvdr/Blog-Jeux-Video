<?php
   $sql = "SELECT membreID, pseudo, email, motDePasse, rol
           FROM membre";
   $stmt = $dbh->query($sql);
