<!DOCTYPE html>

<html lang="<?= $language ?>">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= $app->getUri('css/styles.css') ?>">
        <script type="module" src="<?= $app->getUri('js/main.js') ?>"></script>
    </head>

    <body>
        <?= $this->section('content'); ?>
    </body>
</html>
