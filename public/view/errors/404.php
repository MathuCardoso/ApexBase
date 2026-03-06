<?php
$view->includeHtmlHeader();
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
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    .container {
        text-align: center;
        animation: fadeIn 1s ease;
    }

    h1 {
        font-size: 160px;
        font-weight: 800;
        letter-spacing: 5px;
    }

    h2 {
        font-size: 30px;
        margin-top: -20px;
        margin-bottom: 15px;
    }

    p {
        opacity: 0.9;
        margin-bottom: 30px;
    }

    a {
        text-decoration: none;
        background: white;
        color: #764ba2;
        padding: 12px 28px;
        border-radius: 30px;
        font-weight: 600;
        transition: 0.25s;
    }

    a:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container">

    <h1>404</h1>
    <h2>Página não encontrada</h2>

    <p>
        Oops! Parece que você tentou acessar uma página que não existe.
    </p>

    <a href="/">Voltar para a página inicial</a>

</div>
<?php
$view->includeHtmlFooter();
?>