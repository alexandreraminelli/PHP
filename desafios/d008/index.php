<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <!-- Área de declarações -->
    <?php 
        $numero = $_GET['num'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);

            echo "<p>Analisando o número <strong>$numero</strong>, temos:";
            echo "<ul><li>Sua raiz quadrada é <strong>". number_format($rq, 2, ",", "."). "</strong></li><li>Sua raiz cúbica é <strong>". number_format($rc, 2, ",",".") ."</strong></ul>";
        ?>
    </section>p
</body>

</html>