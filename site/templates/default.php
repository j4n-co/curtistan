<?php snippet('header') ?>
<?php $projects = page('projects')->children()->visible(); ?>
  <main role="main">

    <?php snippet('home-project-description', ['projects' => $projects] ) ?>

    <?php snippet('project-sections', ['projects' => $projects] ) ?>

  </main>

<?php snippet('footer') ?>