<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
       ímpar  ou par? 
        <input type="int" name ="numero">

        <button type="submit" name="Verificar">Verificar</button>
    </form>
    <?php

$numero = 2;

if(isset($_POST["Verificar"])){
    $numero = $_POST["numero"];
}

if (($numero % 2) == 0) {
    echo "Par";
    }

    else {
        echo "Impar";
    }



    ?>
</body>
</html>