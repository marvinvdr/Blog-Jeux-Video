<?php
session_start();
ob_start();
include 'inc/header.php';
include 'library/functions.php';
$dbh = connect();
include 'inc/navbar.php';

if(isset($_REQUEST['param'])){
    switch($_GET['param']){
        case "listArticles":
            include 'mod/listArticles.php';
            include 'views/listArticles.php';
            break;

        case "listMembres":
            include 'inc/adminVerif.php';
            include 'mod/listMembres.php';
            include 'views/listMembres.php';
            break;

        case "listArticlesAdmin":
            include 'inc/adminVerif.php';
            include 'mod/listArticlesAdmin.php';
            include 'views/listArticlesAdmin.php';
            break;

        case "listCat":         
            include 'mod/listCat.php';
            include 'views/listCat.php';
            break;

        case "delCat":  
            include 'inc/adminVerif.php';
            include 'mod/deleteCat.php';             
            break;

        case "addCat":   
            include 'inc/adminVerif.php';
            if(!isset($_REQUEST['submitCat']))
            {
           
                include 'views/addCat.php';   
            }
            else 
            {
                include 'mod/addCat.php'; 
            }                           
            break;

        case "editCat":   
            include 'inc/adminVerif.php';
            if(!isset($_REQUEST['submitCat2']))
            {
            
                include 'mod/editCatSelect.php';   
                include 'views/editCat.php'; 
            }
            else 
            {
                include 'mod/editCatUpdate.php'; 
            }                           
            break;

        case "viewCat":   
                include 'mod/viewCat.php';   
                include 'views/viewCat.php';                     
                break;

        case "edit":
            include "inc/adminVerif.php";
            if(!isset($_REQUEST['submit']))
            {
                include 'mod/edit.php';
                include 'views/edit.php';
            }
            else 
            {
                include 'mod/edit2.php';
            }        
            break;

        case "del":
            include 'inc/adminVerif.php';
            include 'mod/delete.php';
            break;

        case "delCom":
            include 'inc/adminVerif.php';
            include 'mod/delCom.php';
            break;

        case "editRole":
            include 'inc/adminVerif.php';
            include 'mod/editRole.php';
            break;

        case "delMembre":
            include 'inc/adminVerif.php';           
            include 'mod/delMembre.php';
            break;

        case "add":
            include "inc/adminVerif.php";
            $sql = "SELECT catID, nomCat FROM categorie";
            $stmt = $dbh->query($sql);
            if(!isset($_REQUEST['submit']))
            {
                include 'views/add.php';
            }
            else 
            {
                include 'mod/add.php';
            }
            break;

        case "view":
            include 'mod/view.php';
            include 'views/view.php';
            include 'mod/articleCom.php';
            include 'views/articleCom.php';
            if(isset($_REQUEST['submitCom']))
            {
                include 'mod/addCom.php';
            }
            break;

        case "search":
            if(!isset($_REQUEST['submit']))
            {
                include 'views/search.php';
            }
            else 
            {
                include 'views/search.php';
                include 'mod/search.php';
            }
            break;

        case "login":
            if(!isset($_REQUEST['submit']))
            {
                include 'views/login.php';
            }
            else 
            {
                include 'mod/login.php';
            }
            break;

        case "register":
            if(!isset($_REQUEST['submit']))
            {
                include 'views/register.php';
            }
            else 
            {
                include 'mod/register.php';
            }
            break;

        case "logout":
            include 'mod/logout.php';
            break;

        case "403noaccess":             
            include 'views/403.php';                     
            break;

        case "404noexist":             
            include 'views/404.php';                     
            break;
            
        case "500error":             
            include 'views/500.php';                     
            break;
    }
}
else 
{
    include 'mod/listArticles.php';
    include 'views/listArticles.php';
}
include 'inc/footer.php';
ob_end_flush();