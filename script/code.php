<?php
    $senha = $_POST["senha"]??"ADMIN";
    $contador = strlen($senha);
    $simbolo = "/^@|%|#|!|&|-|<|>$/";
    $numero = "/^[0-9]$/";
    $maiuscula = "/^[A-Z]$/";
    $minuscula = "/^[a-z]$/";
    $qtdSimbolo = $qtdNumero = $qtdMaiuscula = $qtdMinuscula = $qtdSimbolo = $qtdInvalida = 0;
    for ($c=0; $c < $contador; $c++) {
        $letra = substr($senha, $c, 1);
        if (preg_match($simbolo, $letra)) {
            $qtdSimbolo++;
        }
        elseif (preg_match($numero, $letra)) {
            $qtdNumero++;
        }
        elseif (preg_match($maiuscula, $letra)) {
            $qtdMaiuscula++;
        }
        elseif (preg_match($minuscula, $letra)) {
            $qtdMinuscula++;
        } else {
            $qtdInvalida;
        }
    }
?>