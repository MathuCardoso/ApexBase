<?php

$viewController->setTitle("Olá")
->includeHtmlHeader();
?>

<h1>Olá!</h1>

<?= $params['id'] ?? null ?>
<?= $params['user'] ?? null ?>
<?= $params['idade'] ?? null ?>

<?php
$viewController
// ->setScriptLink(["/js/script.js"])
->includeHtmlFooter();
?>
