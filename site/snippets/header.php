<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?php snippet('scss') ?>

</head>
<body class='prototype'>

  <header class="header wrap wide" role="banner">


      <h1 class="site-title">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </h1>

      <?php// snippet('menu') ?>

  </header>
