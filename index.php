<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yaldevi&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php require "_partials/_header.php" ?>

    <!-- main -->
    <main>

        <h1 id="sales">Sales</h1>
        <section class="sales-section">

            <?php

            if (isset($_SESSION['SalesImages']) && isset($_SESSION["RentalsImages"])) {
                $SalesImages = $_SESSION["SalesImages"];
                $RentalsImages = $_SESSION["RentalsImages"];
            } else {
                $SalesImages =
                    [
                        ["/assets/img/fix/img1.png", "/assets/img/fix/img1-2.jpg", "/assets/img/fix/img1-3.jpg", "id" => "checkbox1", "id-carr" => "carousel1", "price" => "$473 000", "price/sqft" => "cost 199$ / sqft", "sqft" => "2 368 sqft", "bathrooms" => "3", "bedrooms" => "3", "favourite" => true],
                        ["/assets/img/fix/img2.png", "/assets/img/fix/img2-2.jpg", "/assets/img/fix/img2-3.jpg", "id" => "checkbox2", "id-carr" => "carousel2", "price" => "$512 000", "price/sqft" => "cost 190$ / sqft", "sqft" => "2 690 sqft", "bathrooms" => "2", "bedrooms" => "4", "favourite" => false],
                        ["/assets/img/fix/img3.png", "/assets/img/fix/img3-2.jpg", "/assets/img/fix/img3-3.jpg", "id" => "checkbox3", "id-carr" => "carousel3", "price" => "$535 000", "price/sqft" => "cost 171$ / sqft", "sqft" => "3 121 sqft", "bathrooms" => "3", "bedrooms" => "5", "favourite" => true],
                        ["/assets/img/fix/img4.png", "/assets/img/fix/img4-2.jpg", "/assets/img/fix/img4-3.jpg", "id" => "checkbox4", "id-carr" => "carousel4", "price" => "$278 000", "price/sqft" => "cost 3 475$ / sqft", "sqft" => "80 sqft", "bathrooms" => "1", "bedrooms" => "2", "favourite" => false],
                        ["/assets/img/fix/img5.png", "/assets/img/fix/img5-2.jpg", "/assets/img/fix/img5-3.jpg", "id" => "checkbox5", "id-carr" => "carousel5", "price" => "$350 000", "price/sqft" => "cost 3 431$ / sqft", "sqft" => "102 sqft", "bathrooms" => "1", "bedrooms" => "3", "favourite" => true],
                        ["/assets/img/fix/img6.png", "/assets/img/fix/img6-2.jpg", "/assets/img/fix/img6-3.jpg", "id" => "checkbox6", "id-carr" => "carousel6", "price" => "$390 000", "price/sqft" => "cost 3 250$ / sqft", "sqft" => "120 sqft", "bathrooms" => "2", "bedrooms" => "4", "favourite" => false],
                    ];


                $RentalsImages =
                    [
                        ["/assets/img/fix/img7.jpg", "/assets/img/fix/img7-2.jpg", "/assets/img/fix/img7-3.jpg", "id" => "checkbox7", "id-carr" => "carousel7", "price" => "$1 495 / mo", "bathrooms" => "3", "bedrooms" => "3", "sqft" => "2 368 sqft", "favourite" => true],
                        ["/assets/img/fix/img8.jpg", "/assets/img/fix/img8-2.jpg", "/assets/img/fix/img8-3.jpg", "id" => "checkbox8", "id-carr" => "carousel8", "price" => "$3 299 / mo", "bathrooms" => "2", "bedrooms" => "4", "sqft" => "1 710 sqft", "favourite" => false],
                        ["/assets/img/fix/img9.jpg", "/assets/img/fix/img9-2.jpg", "/assets/img/fix/img9-3.jpg", "id" => "checkbox9", "id-carr" => "carousel9", "price" => "$4500 / mo", "bathrooms" => "2", "bedrooms" => "4", "sqft" => "1 345 sqft", "favourite" => true],
                        ["/assets/img/fix/img10.jpg", "/assets/img/fix/img10-2.jpg", "/assets/img/fix/img10-3.jpg", "id" => "checkbox10", "id-carr" => "carousel10", "price" => "$1 650 / mo", "bathrooms" => "2", "bedrooms" => "2", "sqft" => "984 sqft", "favourite" => false],
                        ["/assets/img/fix/img11.jpg", "/assets/img/fix/img11-2.jpg", "/assets/img/fix/img11-3.jpg", "id" => "checkbox11", "id-carr" => "carousel11", "price" => "$2 095 / mo", "bathrooms" => "1", "bedrooms" => "2", "sqft" => "741 sqft", "favourite" => true],
                        ["/assets/img/fix/img12.jpg", "/assets/img/fix/img12-2.jpg", "/assets/img/fix/img12-3.jpg", "id" => "checkbox12", "id-carr" => "carousel12", "price" => "$3 650 / mo", "bathrooms" => "3", "bedrooms" => "3", "sqft" => "2 012 sqft", "favourite" => false]
                    ];
                $_SESSION["SalesImages"] = $SalesImages;
                $_SESSION["RentalsImages"] = $RentalsImages;
            }
            

            ?>
            <?php foreach ($SalesImages as $index => $image) {
                include("_partials/_salesBox.php");
            } ?>

        </section>

        <h1 id="rentals">Rentals</h1>
        <section class="sales-section">
            <?php foreach ($RentalsImages as $index => $image) {
                include("_partials/_rentalsBox.php");
            } ?>
        </section>

    </main>

    <?php include "_partials/_footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>