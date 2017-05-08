<?php
if(!isset($projects)) $projects = page('projects')->children()->visible();
?>

<aside class="home-project-descriptions">
	<?php foreach($projects as $project): ?>
		<div class="home-project-description" data-pageId="<?= $project->uid() ?>">
			<h2><?= $project->title() ?></h2>
			<?= $project->homeDescription()->kirbytext() ?>
			<?php if ( $page === $site->homePage() ) : ?>
			<a href="<?= $project->url()?>">more</a>
			<?php else: ?>
			<a onclick='window.history.back();' href="<?= $site->homePage()->url()?>"> < home</a>
			<?php endif; ?>
		</div>
	<?php endforeach ?>
</aside>
