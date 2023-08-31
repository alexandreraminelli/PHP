<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!-- Valor 1 -->
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>" required>
            <!-- Peso 1 -->
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$p1?>" required>
            <!-- Valor 2 -->
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>" required>
            <!-- Peso 2 -->
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$p2?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $ma = ($v1+$v2)/2;
        $mp = ($v1*$p1+$v2*$p2)/($p1+$p2);
    ?>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é
                <strong><?=number_format($ma,2, ",", ".")?></strong>
            </li>
            <li>A <strong>Média Aritmética Ponderada</strong> entre os valores é
                <strong><?=number_format($mp,2, ",", ".")?></strong>
            </li>
        </ul>
    </section>
</body>

</html>