<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET);
            // var_dump($_POST);
            // var_dump($_REQUEST);

            $nome = $_GET["nome"] ?? "desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>";
            // Melhor fazer condicional antes de enviar dados
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>

</html>