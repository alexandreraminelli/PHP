<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Números Aleatórios</title>

    <link rel="stylesheet" href="../../style.css" />
</head>

<body>
    <header>
        <h1>Gerador de números aleatórios</h1>
    </header>
    <section>
        <form action="gerador.php" method="get">
            <label for="min">Valor mínimo:</label>
            <input type="number" name="min" id="min" />
            <label for="max">Valor máximo:</label>
            <input type="number" name="max" id="max" />

            <input type="submit" value="Gerar número" />
        </form>
    </section>

    <section>
        <?php 
            $min = $_GET["min"];
            $max = $_GET["max"];

            $num = mt_rand($min, $max);

            print "<strong>$num</strong>";
        ?>
    </section>
</body>

</html>