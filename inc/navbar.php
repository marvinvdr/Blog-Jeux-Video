<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
      <a class="navbar-brand" href="?">Projet Blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <?php 
               if(isset($_SESSION['role']))
               {
                   if($_SESSION['role'] == 1)
                   {
                   ?>
            <li class="nav-item">
               <a class="nav-link" href="?param=listArticles">Accueil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=search">Rechercher</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Admin
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="?param=listArticlesAdmin">Liste des articles</a>
                  <a class="dropdown-item" href="?param=listCat">Liste catégories</a>
                  <a class="dropdown-item" href="?param=listMembres">Liste des membres</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=logout">Deconnexion (<?=$_SESSION['pseudo']?>)</a>
            </li>
            <?php
               }
               else
               {
                   ?>
            <li class="nav-item">
               <a class="nav-link" href="?param=listArticles">Accueil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=search">Rechercher</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=listCat">Catégories</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=logout">Deconnexion (<?=$_SESSION['pseudo']?>)</a>
            </li>
            <?php
               }
               }
               else 
               {
               ?>
            <li class="nav-item">
               <a class="nav-link" href="?param=listArticles">Accueil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=listCat">Catégories</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=search">Rechercher</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=register">Inscription</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="?param=login">Connexion</a>
            </li>
            <?php
               }
               ?>
         </ul>
      </div>
   </div>
</nav>

