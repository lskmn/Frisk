<?php snippet( 'header') ?>

<main class="main">
	<?php if($page->submenu() == '1'): ?>
	<?php snippet( 'submenu') ?>
	<?php endif ?>
	<article>
		<header>
			<h1><?php echo $page->title()->html() ?></h1>
		</header>

		<!-- Display the content -->

		<?php echo $page->text()->kirbytext() ?>

	</article>

	<?php if($page->backbutton() == '1'): ?>
	<nav class="topnav">
		<ul>
			<li><a href="<?php echo $page->parent()->url() ?>">back</a>
			</li>
		</ul>

	</nav>

	<?php endif ?>

</main>

<?php snippet( 'footer') ?>