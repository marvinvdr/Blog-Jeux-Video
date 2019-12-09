<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['pseudo']);
unset($_SESSION['id']);
session_destroy();
$previous = $_SERVER['HTTP_REFERER'];
header('location: '.$previous.'');
