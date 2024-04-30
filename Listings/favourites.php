<?php
session_start();
if (!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] !== true) {
    header("Location: /security/login.php");
}

$SalesImages = $_SESSION["SalesImages"];
$RentalsImages = $_SESSION["RentalsImages"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    require_once "../_partials/_header.php";
    ?>

    
    <h1 id="sales">Sales</h1>
    <section class="sales-section">
        <?php
        foreach ($SalesImages as $index => $image) {
            if ($image['favourite']) {
                include "../_partials/_salesBox.php";
            }
        }
        ?>
         </section>

         <h1 id="rentals">Rentals</h1>
        <section class="sales-section">
            <?php foreach ($RentalsImages as $index => $image) {
                if ($image['favourite']) {
                    include "../_partials/_rentalsBox.php";
                }
            } ?>
        </section>


        <?php
        require_once "../_partials/_footer.php"
        ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>