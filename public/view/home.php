<?php

$view
    ->setStyles(["home.css"])
    ->setTitle("Bem-vindo!")
    ->includeHtmlHeader();
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Arial, sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        text-align: center;
        max-width: 700px;
        padding: 40px;
    }

    h1 {
        font-size: 48px;
        margin-bottom: 10px;
    }

    h2 {
        font-weight: 400;
        opacity: 0.9;
        margin-bottom: 30px;
    }

    p {
        opacity: 0.8;
        margin-bottom: 30px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    a {
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 6px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-primary {
        background: white;
        color: #4f46e5;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
    }

    .btn-secondary {
        border: 1px solid white;
        color: white;
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .footer {
        margin-top: 30px;
        font-size: 14px;
        opacity: 0.7;
    }
</style>

<div class="container">

    <h1>🚀 <?= $view->app->name(); ?>!</h1>

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