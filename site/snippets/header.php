<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <h1 class="site-header">
    <a class="site-header__a" href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
  </h1>
  <?php// snippet('menu') ?>