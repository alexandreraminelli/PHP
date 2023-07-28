<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="../../style.css" />
</head>

<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <section>
        <form action="conversao.php" method="post">
            <label for="dinheiro">Valor em real:</label>
            <input type="number" name="dinheiro" id="dinheiro" step="0.01" />
            <input type="submit" value="Converter" />
        </form>
    </section>
    <section>
        <?php
        // Cotação do Google
        $cotação = 4.74;
    
        // Quantos R$ você tem?
        $real = $_POST["dinheiro"] ?? 0;
    
        // Equivale à:
        $dólar = $real / $cotação;
    
    
        $padrão = numfmt_create("jp", NumberFormatter::CURRENCY);
    
        print "Seus " . numfmt_format_currency($padrão,$real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD");
        ?>
    </section>
</body>

</html>