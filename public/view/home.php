<?php

$view
    ->setStyles([css("home")])
    ->setTitle("Bem-vindo!")
    ->includeHtmlHeader();
?>

<div class="container">

    <h1>🚀 <?= appName(); ?>!</h1>

    <h2>Seu projeto PHP está funcionando!</h2>

    <p>
        Se você está vendo esta página, significa que sua aplicação
        foi instalada corretamente e o sistema de rotas está funcionando.
    </p>

    <div class="footer">
        PHP Version: <?= phpversion() ?>
    </div>

</div>


<?php
$view
    ->setJs(["script.js"])
    ->includeHtmlFooter();
?>