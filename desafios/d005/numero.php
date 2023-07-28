<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Analisar números</title>
    <link rel="stylesheet" href="../../style.css" />
</head>

<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>

    <section>
        <form action="numero.php" method="post">
            <label for="numero">Número Real:</label>
            <input type="number" name="numero" id="numero" step="0.001" />
            <input type="submit" value="Analisar" />
        </form>
    </section>

    <section>
        <h2>Analize:</h2>
        <?php 
            $num = $_POST["numero"] ?? 0;

            print "<p>Analizando o número <strong>" . number_format($num,3,",",".") . "</strong> informado:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li> A parte inteira do número é <strong>". number_format($num,0,",",".") ."</strong> </li><li>A parte fracionária do número é <strong>" . number_format($fra,3,",",".") . "</li></ul>";
        ?>
    </section>
</body>

</html>