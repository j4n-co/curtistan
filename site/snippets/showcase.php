<?php
if(!isset($projects)) $projects = page('projects')->children()->visible();
?>

  <?php foreach($projects as $project): ?>
    <?php $background = ( $project->background()->isNotEmpty() ) ? $project->background()->toFile()->url() : '';?>
    <div class="project-section"
         style="background-image: url(<?= $background ?>);"
         data-pageId="<?= $project->UID()?>">

        <div class="project-width-container" style="max-width:960px;margin:0 auto; position:relative;  height: 95vh;">

        <?php foreach($project->builder()->toStructure() as $section): ?>
          <?php if ( $page === $site->homePage() ): ?>
            <?php if ( $section->showOnHome()->isTrue() ) : ?>
              <?php snippet('/builder/item', array('data' => $section)) ?>
            <?php endif ?>
          <?php else:  ?>
            <?php snippet('/builder/item', array('data' => $section)) ?>
          <?php endif; ?>
        <?php endforeach ?>
        </div>
    </div>

  <?php endforeach ?>
