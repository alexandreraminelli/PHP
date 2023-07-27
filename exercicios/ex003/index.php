<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>
    <h1>Tipos primitivos</h1>


    <h2>Teste números</h2>
    <?php 
        $num = 0xAB49 + 0b01;
        echo "Essa variável tem o valor $num";
    ?>
    <br>
    <br>

    <h2>Função var_dump</h2>
    <?php 
    // função var_dump
        $v = 300;
        $a = 3.4;
        $t = true;
        $m = "Olá, mundo!";
        var_dump($v); 
        var_dump($a);
        var_dump($t);
        var_dump($m);
    ?>

    <h2>Coersão de tipo</h2>
    <?php 
        $c1 = (int) "-950";
        var_dump($c1);
    ?>

    <h1>Tipos Compostos</h1>
    <h2>Array</h2>
    <?php 
        $vetor = [6,4,2,63,4];
        var_dump($vetor);

    ?>
    <h2>Object</h2>
    <?php 
        class Pessoa{
            private string $nome;
        }

        $o = new Pessoa;
        var_dump($o);
    ?>

</body>

</html>