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
            // Cotação do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotação = $dados["value"][0]["cotacaoCompra"];
        
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