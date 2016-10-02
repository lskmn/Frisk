<?php snippet( 'header') ?>

<main class="main" role="main">

	<article>
		<header>
			<h1><?php echo $page->title()->html() ?></h1>	
		</header>

		<!-- Display the content -->

		<?php echo $page->text()->kirbytext() ?>

	</article>


	<nav class="topnav">
		<ul>
			<li><a href="<?php echo $page->parent()->url() ?>">back</a>
			</li>
		</ul>
	</nav>



</main>

<?php snippet( 'footer') ?>