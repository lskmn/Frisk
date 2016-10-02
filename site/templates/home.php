<?php snippet( 'header') ?>
<article>
	<header>
		<h1><?php echo $page->title()->html() ?></h1>	
	</header>
	<?php echo $page->text()->kirbytext() ?>

</article>
<?php snippet( 'projects') ?>


<?php snippet( 'footer') ?>