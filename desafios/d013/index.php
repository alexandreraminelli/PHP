<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
    img.nota {
        height: 100px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <?php 
        $saque = $_GET['sacar'] ?? 0;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sacar">Quantos reais você deseja sacar? (R$)</label>
            <input type="number" name="sacar" id="sacar" min="0" step="1" value="<?=$saque?>" required>
            <p><small>Notas disponíveis: R$100, R$50, R$20, R$10, R$5 e R$2. <br>Moedas disponíveis: R$1</small></p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $saque;
        //100
        $tot100 = floor($resto/100);
        $resto %= 100;
        //50
        $tot50 = floor($resto/50);
        $resto %= 50;
        //20
        $tot20 = floor($resto/20);
        $resto %= 20;
        //10
        $tot10 = floor($resto/10);
        $resto %= 10;
        //5
        $tot5 = floor($resto/5);
        $resto %= 5;
        //2
        $tot2 = floor($resto/2);
        $resto %= 2;
        //1
        $tot1 = floor($resto/1);
        $resto %= 1;
    ?>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" class="nota" alt="">R$100 x <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" class="nota" alt="">R$50 x <?=$tot50?></li>
            <li><img src="imagens/20-reais.jpg" class="nota" alt="">R$20 x <?=$tot20?></li>
            <li><img src="imagens/10-reais.jpg" class="nota" alt="">R$10 x <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" class="nota" alt="">R$5 x <?=$tot5?></li>
            <li><img src="imagens/2-reais.jpg" class="nota" alt="">R$2 x <?=$tot2?></li>
            <li><img src="imagens/1-real.jpg" class="nota" alt="">R$1 x <?=$tot1?></li>
        </ul>
    </section>
</body>

</html>