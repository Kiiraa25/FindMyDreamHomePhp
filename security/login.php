<?php
session_start();
if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
    header("Location: /index.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/style/index.css">
    <link rel="stylesheet" href="../assets/style/login.css">
</head>

<body>

    <div>


    </div>
    <form method="POST">

        <div class="formContent">
            <div>
              <h2>Log in</h2>
            <p>You do not have an account ? <a href="#">Create an account</a></p>  
            </div>
            
            <div>
                <div class="inputs">
                    <label for="username"> Your username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="password"> Your password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit">Login</button>
                <p class="forgottenPass"><a href="#">Forgot your password ?</a></p>
            </div>


            

        </div>


    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            $_POST['username'] == $_SESSION["username"] &&
            $_POST['password'] == $_SESSION["password"]
        ) {
            $_SESSION["isLoggedIn"] = true;
            header('Location: ../index.php');
        } else {
            header('Location: login.php');
        }
    }
    ?>


</body>

</html>