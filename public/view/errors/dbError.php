<?php
/** @var PDOException $exception */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Erro no Banco de Dados</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            padding: 30px;
        }

        .card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            padding: 30px;
        }

        .error-title {
            font-size: 24px;
            font-weight: bold;
            color: #c0392b;
            margin-bottom: 10px;
        }

        .error-subtitle {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        .error-box {
            background: #2d3436;
            color: #ecf0f1;
            padding: 15px;
            border-radius: 6px;
            font-family: Consolas, monospace;
            font-size: 14px;
            overflow-x: auto;
        }

        .details {
            margin-top: 20px;
            font-size: 14px;
        }

        .details span {
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }

        .code-block {
            background: #1e272e;
            padding: 15px;
            border-radius: 6px;
            font-family: Consolas, monospace;
            font-size: 13px;
            color: #dcdde1;
            overflow-x: auto;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="error-title">
            ❌ Erro no Banco de Dados (PDOException)
        </div>

        <div class="error-subtitle">
            Ocorreu um erro ao executar uma operação no banco de dados.
        </div>

        <div class="error-box">
            <?= htmlspecialchars($exception->getMessage()) ?>
        </div>

        <div class="details">
            <p><span>Código:</span> <?= $exception->getCode() ?></p>
            <p><span>Arquivo:</span> <?= $exception->getFile() ?></p>
            <p><span>Linha:</span> <?= $exception->getLine() ?></p>
        </div>

        <div class="code-block">
            <?= nl2br(htmlspecialchars($exception->getTraceAsString())) ?>
        </div>

        <div class="footer">
            <?= date('Y') ?> - Sistema de Aplicação
        </div>
    </div>
</div>

</body>
</html>