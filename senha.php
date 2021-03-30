<?php include "script/code.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senha</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="icon/lock_clock-24px.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <div class="password">
            <h3><?= $senha?></h3>
        </div>
        <div class="result">
            <div>S: <span><?= $qtdSimbolo?></span></div>
            <div>N: <span><?= $qtdNumero?></span></div>
            <div>MA: <span><?= $qtdMaiuscula?></span></div>
            <div>MI: <span><?= $qtdMinuscula?></span></div>
        </div>
        <div class="div-btn">
            <a class="btn" href="index.html">Voltar</a>
        </div>
        <div class="footer">
            <span>
                Matheus Siqueira
            </span>
        </div>
    </main>
    <div class="subtitle">
        <p>S: Simbolos, N: Números, MA: Maiúsculas, MI: Minúsculas</p>
    </div>
</body>
</html>