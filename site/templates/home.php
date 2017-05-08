<?php snippet('header') ?>
<?php $projects = page('projects')->children()->visible(); ?>
  <main role="main">

    <?php snippet('home-project-description', ['projects' => $projects] ) ?>

    <section class="project-sections">
        <?php snippet('showcase', ['projects' => $projects] ) ?>
    </section>

  </main>

<?php snippet('footer') ?>