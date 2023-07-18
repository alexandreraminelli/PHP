<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        echo "Hoje é dia " . date("d/D/M/Y");
        echo "e a hora atual é " . date("G:i:s T");

        echo "</br>";
        
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/D/M/Y");
        echo "e a hora atual é " . date("G:i:s T");
    ?>
</body>

</html>