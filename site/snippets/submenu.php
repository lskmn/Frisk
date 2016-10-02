<!-- Display a sub-menu if necessary -->
		  <?php


$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->visible();
}



// only show the menu if items are available
if($items and $items->count()):

?>
<nav class="topnav">
	<ul>
		<li>
			<a<?php e($root->isOpen(), ' class="active"') ?> href="
				<?php echo $root->url() ?>">
				<?php echo $root->title() ?></a>
		</li>
		<?php foreach($items as $item): ?>
		<li>
			<a<?php e($item->isOpen(), ' class="active"') ?> href="
				<?php echo $item->url() ?>">
				<?php echo $item->title()->html() ?></a>
		</li>
		<?php endforeach ?>
	</ul>
</nav>

<?php endif ?>