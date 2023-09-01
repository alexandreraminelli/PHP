<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['reajuste'] ?? '0';
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!-- Preço -->
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" required min="0.10" step="0.01">
            <!-- Reajuste -->
            <label for="reajuste">Qual será o percentual de reajuste? <strong>(<span id="porc">?</span>
                    %)</strong></label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()"
                value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        $aumento = $preco * $reajuste / 100;
        $novo = $preco + $aumento;
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>Com o reajuste de <?=$reajuste?>%, o preço do produto agora é
            <strong>R$<?=number_format($novo, 2, ",",".")?></strong>, tendo um aumento de
            R$<?=number_format($aumento, 2, ",", ".")?>.</p>
    </section>

    <script>
    mudaValor()

    function mudaValor() {
        porc.innerText = reajuste.value

    }
    </script>
</body>

</html>