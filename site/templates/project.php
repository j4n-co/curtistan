<?php snippet('header') ?>
  <main role="main">

    <?php snippet('home-project-description', ['projects' => [$page]] ) ?>

    <section class="project-sections">
        <?php snippet('showcase', ['projects' => [$page] ] ) ?>
    </section>

  </main>

<?php snippet('footer') ?>