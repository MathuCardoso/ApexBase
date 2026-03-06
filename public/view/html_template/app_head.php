<!DOCTYPE html>
<html lang="<?= $this->app::appLang() ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->getTitle() ?></title>
    <link rel="stylesheet" href="<?= $this->path::css("main.css") ?>">
    <?= $this->getLink(); ?>
    <?= $this->getStyles(); ?>
</head>

<body>