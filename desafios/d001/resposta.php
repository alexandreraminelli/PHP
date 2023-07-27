<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Antecessor e Sucessor</title>

    <link rel="stylesheet" href="../../style.css" />
</head>

<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>

    <section>
        <form action="resposta.php" method="post">
            <label for="numero">Insira um número:</label>
            <input type="number" name="numero" id="numero" />
            <input type="submit" value="Ir" />
        </form>
    </section>

    <section>
        <?php 
            $numero = $_POST["numero"];

            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>Você inseriu o número <strong>$numero</strong>.</p> <p>O antecessor desse número é $antecessor.</p> <p>O sucessor desse número é $sucessor.</p>";
        ?>
    </section>
</body>

</html>