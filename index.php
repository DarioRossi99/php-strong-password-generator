<?php
function randomPass(){
    $small ="abcdefghilmnopqrstuwvxyjz";
    $big ="ABCDEFGHILMNOPQRSTUWVXYJZ";
    $number ="0123456789";
    $symbol ="-_.:,;";

    $passRandom = $small . $big . $number . $symbol;

    $charsIndex = rand(0, strlen($passRandom) - 1);

    return $passRandom[$charsIndex];
}
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
    
    <div class="container my-4 text-center border border-warning bg-success p-3 rounded" >
        <h1 class="mb-4"><em><strong>PassworDinator2000</strong></em></h1>
        <?php 
            echo "<div class='container'>$passRandom</div>";
        ?>
    </div>
</body>
</html>