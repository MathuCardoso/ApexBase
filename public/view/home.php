<?php

$viewController->setTitle("Olá")
->setLinks(["css/home.css"])
->includeHtmlHeader();
?>

<h1>Olá!</h1>

<?= $params['id'] ?? null ?>
<?= $params['user'] ?? null ?>
<?= $params['idade'] ?? null ?>

<?php
$viewController->includeHtmlFooter();
?>
