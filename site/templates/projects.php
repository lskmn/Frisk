<?php snippet('header') ?>

<article>
			<header>
				<h1><?php echo $page->title()->html() ?></h1>
				<?php echo $page->text()->kirbytext() ?>
			</header>
</article>


<?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

<?php foreach($articles as $article): ?>

<article>
	<?php if($image = $article->image()): ?>
		<figure>
					<a href="<?php echo $article->url() ?>"><?php echo thumb($image, array('width' => 720, 'height' => 200, 'crop' => true)); ?></a>
			
		</figure>
	<?php endif ?>
			<header>
				<h2><?php echo $article->title()->html() ?></h2>
			</header>
		
		
				<p><?php echo $article->text()->excerpt(300) ?></p>
				<div class="readmore"><a href="<?php echo $article->url() ?>">Read more</a></div>
				
			
			


</article>

<?php endforeach ?>

<?php

$list       = $page->children()->paginate(10);
$pagination = $list->pagination();

if($pagination->hasPages()):
?>

<nav class="topnav">
  <ul>

    <?php if($pagination->hasPrevPage()): ?>
    <li><a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a></li>
    
    <?php endif ?>

    <?php foreach($pagination->range(10) as $r): ?>
    <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
    <?php endforeach ?>

    <?php if($pagination->hasNextPage()): ?>
    <li class="last"><a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a></li>
    <?php endif ?>

  </ul>
</nav>
<?php endif ?>
<?php snippet('footer') ?>