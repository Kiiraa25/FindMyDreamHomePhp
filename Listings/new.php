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
    <link rel="stylesheet" href="/assets/style/index.css">
    <link rel="stylesheet" href="/assets/style/new.css">
</head>
<?php require_once "../_partials/_header.php";

$errors = []; ?>

<body>

    <?php //echo empty($errors) ? 'annonces.php' : htmlspecialchars($_SERVER["PHP_SELF"]); 
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="checkbox7...">
            <?php if (empty($_POST['title'])) $errors[] = "titre obligatoire"; ?>
        </div>

        <div>
            <label for="type">Type</label>
            <select name="type">
                <option value="null"></option>
                <option value="rent">Rent</option>
                <option value="sale">Sale</option>
            </select>

            <?php if (empty($_POST['type']) || $_POST['type'] == "null") $errors[] = "type obligatoire"; ?>
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" name="price">
            <?php if (empty($_POST['price'])) $errors[] = "prix obligatoire"; ?>
        </div>

        <div>
            <label for="sqft">Superficie</label>
            <input type="number" name="sqft">
            <?php if (empty($_POST['sqft'])) $errors[] = "superficie obligatoire"; ?>
        </div>

        <div>
            <label for="bathrooms">Salles de bain</label>
            <input type="number" name="bathrooms">
            <?php if (empty($_POST['bathrooms'])) $errors[] = "nombre de salles de bain obligatoire"; ?>
        </div>

        <div>
            <label for="bedrooms">Chambres</label>
            <input type="number" name="bedrooms">
            <?php if (empty($_POST['bedrooms'])) $errors[] = "chambres obligatoire"; ?>
        </div>

        <div>
            <label for="fileUpload">Images</label>
            <input type="file" name="fileUpload[]" multiple>
            <?php
            //if (empty($_POST['fileUpload'])) $errors[] = "URL n°1 obligatoire"; 
            ?>
        </div>

        <button type="submit"> Submit</button>
    </form>

    <?php
    $destinationFolder = 'C:\Users\Kiiraa\Documents\Php\FindMyDreamHomePhp\assets\img/annonces/';
    var_dump(($_FILES));
    var_dump($RentalsImages);
    $destImages=[];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['fileUpload'])) {
            
            foreach ($_FILES['fileUpload']['name'] as $index => $filename) {
                $filetmp = $_FILES['fileUpload']['tmp_name'][$index];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $allowed = ['jpg', 'jpeg', 'png', 'gif'];

                if (in_array(strtolower($ext), $allowed)) {
                    if (!is_dir($destinationFolder)) {
                        mkdir($destinationFolder, 0755, true);
                    }
                    $dest = '../assets/img/annonces/' . uniqid() . '.' . $ext;
                    
                    if (move_uploaded_file($filetmp, $dest)) {
                        echo "Le fichier a été déplacé avec succès";
                        $destImages[]=$dest;
                    } else {
                        echo "Erreur lors de l'upload du fichier";
                    }
                } else {
                    echo "Extension de fichier non autorisée.";
                }
            }
        }
    }




    ?>
    <?php if (!empty($errors)) { ?>
        <div class="error">
            <h2>Merci de corriger ces erreurs :</h2>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php
    ;
    } else {
        if ($_POST['type'] == "rent") {
            $RentalsImages[] =
                [
                    htmlspecialchars($destImages[0]),
                    htmlspecialchars($destImages[1]),
                    htmlspecialchars($destImages[2]),
                    "id" => htmlspecialchars($_POST['title']),
                    "id-carr" => uniqid("c"),
                    "price" => htmlspecialchars($_POST['price'] . "$ / mo"),
                    "bathrooms" => htmlspecialchars($_POST['bathrooms']),
                    "bedrooms" => htmlspecialchars($_POST['bedrooms']),
                    "sqft" => htmlspecialchars($_POST['sqft'] . " sqft"),
                    "favourite" => random_int(0, 1)
                ];

            $_SESSION["RentalsImages"] = $RentalsImages;
        } else if ($_POST['type'] == "sale") {
            $SalesImages[] =
                [
                    htmlspecialchars($destImages[0]),
                    htmlspecialchars($destImages[1]),
                    htmlspecialchars($destImages[2]),
                    "id" => $_POST['title'],
                    "id-carr" => uniqid("c"),
                    "price" => $_POST['price'] . "$",
                    "price/sqft" => "cost " . floor($_POST['price'] / $_POST['sqft']) . " $ / sqft",
                    "sqft" => $_POST['sqft'] . " sqft",
                    "bathrooms" => $_POST['bathrooms'],
                    "bedrooms" => $_POST['bedrooms'],
                    "favourite" => random_int(0, 1)
                ];

            $_SESSION["SalesImages"] = $SalesImages;
        };

        header("location: /Listings/formSubmitted.php");
    }
    ?>
    <?php require_once "../_partials/_footer.php"; ?>
</body>

</html>