<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- replaces "no-js" class on html element with "js" -->
  <script>(function(d,c,r){d[c]=r.test(d[c])?d[c].replace(r,'$1js$2'):[d[c],'js'].join(' ')})(document.documentElement,'className',/(?:(^|\s)no-js(\s|$))/)</script>
  <!-- responsive images picture polyfill -->
  <script>
  (function(w, d){
    function loadJS(u){var r = d.getElementsByTagName("script")[0], s = d.createElement("script");s.src = u;r.parentNode.insertBefore( s, r );}
    if(!window.HTMLPictureElement){
      d.createElement('picture');
      loadJS("<?= url('assets/plugins/imageset/js/dist/respimage.min.js') ?>");
    }
  })(window, document);
  </script>

  <?= css('assets/plugins/imageset/css/imageset.min.css') ?>
  <?= css('assets/css/style.css') ?>
  <?= js('assets/plugins/imageset/js/dist/imageset.js') ?>

</head>
<body>
  <div class="l__site-header">
    <h1 class="site-header">
      <a class="site-header__a"  href="<?= url() ?>">
        <?= $site->title()->html() ?>
      </a>
    </h1>
  </div>

  <?php// snippet('menu') ?>