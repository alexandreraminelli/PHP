<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" step="0.001" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        //Milênios
        $milenios = intdiv($segundos,31_536_000_000);
        $sobra = $segundos % 31_536_000_000;
        //Séculos
        $seculos = intdiv($sobra, 3_153_600_000);
        $sobra = $sobra % 3_153_600_000;
        //Décadas
        $decadas = intdiv($sobra, 315_360_000);
        $sobra = $sobra % 315_360_000;
        //Anos
        $anos = intdiv($sobra, 31_536_000);
        $sobra = $sobra % 31_536_000;
        //Semanas
        $semanas = intdiv($sobra, 604_800);
        $sobra = $sobra % 604_800;
        //Dias
        $dias = intdiv($sobra, 86_400);
        $sobra = $sobra % 86_400;
        //Horas
        $horas = intdiv($sobra, 3_600);
        $sobra = $sobra % 3_600;
        //Minutos
        $minutos = intdiv($sobra, 60);
        $sobra = $sobra % 60;
    ?>

    <section>
        <h2>Totalizando</h2>
        <p>Analisando o valor inserido, <strong><?=number_format($segundos, 3, ",",".")?> segundos</strong> equivalem a:
        </p>
        <ul>
            <li><?=number_format($milenios, 0, ",",".")?> milênios</li>
            <li><?=number_format($seculos, 0, ",",".")?> séculos</li>
            <li><?=number_format($decadas, 0, ",",".")?> décadas</li>
            <li><?=number_format($anos, 0, ",",".")?> anos</li>
            <li><?=number_format($semanas, 0, ",",".")?> semanas</li>
            <li><?=number_format($dias, 0, ",",".")?> dias</li>
            <li><?=number_format($horas, 0, ",",".")?> horas</li>
            <li><?=number_format($minutos, 0, ",",".")?> minutos</li>
            <li><?=number_format($sobra, 3, ",",".")?> segundos</li>
        </ul>
    </section>
</body>

</html>