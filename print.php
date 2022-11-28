<?php
$nomecensurato= $_GET['censura'];
$nome = $_GET['nome'];
$lunghezza= strlen($nome);
$censura= str_replace($nomecensurato, "***", $nome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "$nome $lunghezza" ?></h1>
    <h1><?php echo "$censura $lunghezza" ?></h1>
</body>
</html>