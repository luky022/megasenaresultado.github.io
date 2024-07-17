<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA SENA RESULTADO</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/52033036/av_400x400.png" type="image/x-icon">
</head>

<body>

    <header>
        <img src="mega-sena-logo.png" alt="Logo Mega Sena" class="logo">
    </header>

    <?php



    //api github https://github.com/guto-alves/loterias-api?tab=readme-ov-file
    $url = 'https://loteriascaixa-api.herokuapp.com/api/megasena/latest';

    $dados = json_decode(file_get_contents($url), true);


    $sorteio1 = $dados["dezenasOrdemSorteio"][0];
    $sorteio2 = $dados["dezenasOrdemSorteio"][1];
    $sorteio3 = $dados["dezenasOrdemSorteio"][2];
    $sorteio4 = $dados["dezenasOrdemSorteio"][3];
    $sorteio5 = $dados["dezenasOrdemSorteio"][4];
    $sorteio6 = $dados["dezenasOrdemSorteio"][5];

    $concurso = $dados["concurso"];
    $acumulado = $dados["valorEstimadoProximoConcurso"];

    echo "<h2>Resultado Mais Recente</h2> 

    <p> NÚMERO DO CONCURSO<strong> $concurso</strong> </p>
    
    <section class=\"resultado-recente\">
        <div class=\"numeros\">
            <div class=\"bola\">$sorteio1</div>
            <div class=\"bola\">$sorteio2</div>
            <div class=\"bola\">$sorteio3</div>
            <div class=\"bola\">$sorteio4</div>
            <div class=\"bola\">$sorteio5</div>
            <div class=\"bola\">$sorteio6</div>
        </div>
    </section>";



    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "ACUMULOU " . numfmt_format_currency($padrao, $acumulado, "BRL");

    echo "<h1>GERADOR DE NÚMEROS MEGA-SENA.</h1>";
    echo "<p> <strong>BETA</strong> </p>";




    $num1 = 01;
    $num2 = 60;

    $numero1 = mt_rand($num1, $num2);

    $num3 = 01;
    $num4 = 60;

    $numero2 = mt_rand($num3, $num4);

    $num5 = 01;
    $num6 = 60;

    $numero3 = mt_rand($num5, $num6);

    $num7 = 01;
    $num8 = 60;

    $numero4 = mt_rand($num7, $num8);

    $num9 = 01;
    $num10 = 60;

    $numero5 = mt_rand($num9, $num10);

    $num11 = 01;
    $num12 = 60;

    $numero6 = mt_rand($num11, $num12);


    echo "
    <section class=\"gerador\">
        <div class=\"numerossorte\">
            <div class=\"bolasorte\">$numero1</div>
            <div class=\"bolasorte\">$numero2</div>
            <div class=\"bolasorte\">$numero3</div>
            <div class=\"bolasorte\">$numero4</div>
            <div class=\"bolasorte\">$numero5</div>
            <div class=\"bolasorte\">$numero6</div>

        </div>
    </section>

";


    ?>
    <br>
    <button onclick="javascript:document.location.reload()">🔃GERAR NOVAMENTE</button>
</body>

</html>