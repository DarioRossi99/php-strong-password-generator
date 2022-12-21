<?php
include_once "./data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Dont read</title>
</head>
<body class="bg-dark text-white">
    <form method="GET" action='index.php'>
        <div class="container my-4 text-center border border-warning bg-success p-3 rounded" >
            <h1 class="mb-4"><em><strong>PassworDinator2000</strong></em></h1>
            <input type="number" value="" name="numChars" placeholder="Lunghezza Pass">
            <?php 
            /**
             * questo if prende l'input inserito dall'utente (esempio input utente:10) nominato (numChars) e sfrutta il numero inserito per collegarsi alla funzione (randompass)
             */
                if (isset($_GET["numChars"])) {
                    echo randomPass($_GET["numChars"]);
                }
            ?>
            <button type="submit"> Genera password (press agin for new password) </button>
        </div>
    </form>
</body>
</html>