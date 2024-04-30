<?php
session_start();
if (!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] !== true) {
    header("Location: /security/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="refresh" content="4;url=../index.php"> 
    <title>Document</title>
    <style>
        body {
            background-color: white;
            width: 100%;
            font-family: 'Raleway', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 600px;
            height: 500px;
            background-color: #c9ada7;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            padding-top: 50px;
            padding-bottom: 50px;
            justify-content: space-evenly;
        }

        .titles{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .submittedImg {
            width: 50px;
        }

        a{
            color: gray;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        a:hover{
            text-decoration: underline;
        }

        .arrowPrev{
            width: 20px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="titles">
          <img class="submittedImg" src="/assets/img/icons/formsubmitted.svg" alt="">
        <h1>Thank you !</h1>
        <h3> Your request has been succesfully submitted.</h3>  
        </div>
        <p><a href="/Listings/new.php"> <img class="arrowPrev" src="/assets/img/icons/arrowPrev.svg" alt=""> Back to the previous page</a></p>
    
    </div>

</body>

</html>