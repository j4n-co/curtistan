<?php
if(!isset($projects)) $projects = page('projects')->children()->visible();
?>

<aside data-js-fixed-items>
	<?php foreach($projects as $project): ?>
		<div class="project-item l__fixed-box" data-js-fixed-item data-pageId="<?= $project->uid() ?>">
			<?= $project->homeDescription()->kirbytext() ?>
			<?php /*
			<?php if ( $page === $site->homePage() ) : ?>
			<a href="<?= $project->url()?>">more</a>
			<?php else: ?>
			<a onclick='window.history.back();' href="<?= $site->homePage()->url()?>"> < home</a>
			<?php endif; ?>
			*/ ?>
		</div>
	<?php endforeach ?>
</aside>
