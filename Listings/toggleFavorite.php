<?php

session_start();


if($_SESSION['isLoggedIn']!=true)
{
header("location: /security/login.php");
}


if($_SERVER["REQUEST_METHOD"]=== "GET")
{
$id = $_GET['id'];
//$type = $_GET['type'];
$salesFavourite = $_SESSION['SalesImages'][$id]['favourite'];
$RentalsFavourite = $_SESSION['RentalsImages'][$id]['favourite'];

$_SESSION['SalesImages'][$id]['favourite'] = !$salesFavourite;
$_SESSION['RentalsImages'][$id]['favourite'] = !$RentalsFavourite;

header("location: /index.php");
exit();
}

