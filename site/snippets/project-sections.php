<?php
if(!isset($projects)) $projects = page('projects')->children()->visible();
?>

  <?php foreach($projects as $project): ?>
    <?php $background = ( $project->background()->isNotEmpty() ) ? $project->background()->toFile()->url() : '';?>

    <section class="l__project"
         style="background-image: url(<?= $background ?>);"
         data-pageId="<?= $project->UID()?>" data-js-project-section>

        <article class="l__project__content-wrapper">
          <?php foreach($project->custombuilder()->toStructure() as $section): ?>
            <?php if ( $page === $site->homePage() ): ?>
              <?php if ( $section->showOnHome()->isTrue() ) : ?>
                <?php snippet('/builder/item', array('data' => $section)) ?>
              <?php endif ?>
            <?php else:  ?>
              <?php snippet('/builder/item', array('data' => $section)) ?>
            <?php endif; ?>
          <?php endforeach ?>
        </article>

    </section>

  <?php endforeach ?>
