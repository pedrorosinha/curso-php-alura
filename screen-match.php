<?php 
    echo "Bem vindo(a) ao Screen Match\n";

    $nomeFilme = "Top Gun - Maverick";
    $anoLancamento = $argv[1] ?? 2022;

    $somaNotas = 9;
    $somaNotas += 6;
    $somaNotas += 8;
    $somaNotas += 7.5;
    $somaNotas += 5;

    $notaFilme = $somaNotas / 5;
    $planoPrime = true;

    $incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

    echo "Nome do filme: " . $nomeFilme . "\n";

    echo "Nota do filme: $notaFilme \n";

    echo "Ano de lançamento: $anoLancamento \n";

    if ($anoLancamento > 2022) {
        echo "Esse filme é um lançamento";      
    } elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
        echo "Esse filme ainda é novo";
    }
    else {
        echo "Esse filme não é um lançamento";
    }
?>