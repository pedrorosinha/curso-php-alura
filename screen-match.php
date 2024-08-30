<?php
    echo "Bem vindo(a) ao Screen Match\n";

    $nomeFilme = "Top Gun - Maverick";
    // $nomeFilme = "Divertidamente 2";
    // $nomeFilme = "Thor: Ragnarok";

    $anoLancamento = 2022;

    $quantidadeDeNotas = $argc - 1;
    $notas = [];

    for ($i = 1; $i < $argc; $i++) {
        $notas[] += (float) $argv[$i];
    }

    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
    $planoPrime = true;

    $incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

    echo "Nome do filme: " . $nomeFilme . "\n";

    echo "Nota do filme: $notaFilme \n";

    echo "Ano de lançamento: $anoLancamento \n";

    if ($anoLancamento > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }

    $genero = match ($nomeFilme) {
        "Top Gun - Maverick" => "Ação",
        "Thor: Ragnarok" => "Super-herói",
        "Divertidamente 2" => "Animação",
        default => "Gênero desconhecido"
    };

    echo "O gênero do filme $nomeFilme é: $genero\n";

    $filme = [
        'nome' => 'Thor: Ragnarok',
        'ano' => 2017,
        'nota' => 7.8,
        'genero' => 'Super-herói'
    ];

    echo $filme['ano'];
