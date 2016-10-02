<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="<?php echo $site->author()->html() ?>" />
	<meta name="publisher" content="<?php echo html($site->author()) ?>" />
	<meta name="copyright" content="<?php echo html($site->author()) ?>" />
	<?php if($page->isHomepage()): ?>
	<meta name="description" content="<?php echo $site->description()->html() ?>" />
	<?php else: ?>
	<meta name="description" content="<?php echo html($page->text()->excerpt(160)) ?>" />
	<?php endif ?>
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0;" />

	<?php if($page->isHomepage()): ?>
	<title><?php echo html($site->title()) ?></title>
	<?php else: ?>
	<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
	<?php endif ?>

	<meta name="robots" content="index,follow" />
	<link rel="canonical" href="<?php echo html($page->url()) ?>" />
	<link rel="shortcut icon" href="<?php echo url('/favicon.ico') ?>" />

	<!-- OpenGraph Tags for Facebook, etc. -->
	<meta name="DC.Title" content="<?php echo html($page->title()) ?>" />
	<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
	<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
	<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
	<?php if($page->isHomepage()): ?>
	<meta name="DC.Description" content="<?php echo $site->description()->html() ?>" />
	<?php else: ?>
	<meta name="DC.Description" content="<?php echo html($page->text()->excerpt(160)) ?>" />
	<?php endif ?>
	<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo html($page->url()) ?>" />
	<?php foreach($page->images() as $image): ?>
	<meta property="og:image" content="<?php echo $image->url() ?>" />
	<?php endforeach ?>
	<?php if($page->isHomepage()): ?>
	<meta property="og:description" content="<?php echo $site->description()->html() ?>" />
	<?php else: ?>
	<meta property="og:description" content="<?php echo html($page->text()->excerpt(160)) ?>" />
	<?php endif ?>
	<meta itemprop="name" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
	<?php if($page->isHomepage()): ?>
	<meta itemprop="description" content="<?php echo $site->description()->html() ?>">
	<?php else: ?>
	<meta itemprop="description" content="<?php echo html($page->text()->excerpt(160)) ?>">
	<?php endif ?>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,900italic' rel='stylesheet' type='text/css'>
	<?php echo css( 'assets/css/main.css') ?>
	<link rel="stylesheet" href="<?php echo url('assets/css/font-awesome/css/font-awesome.min.css');?>">
	<?php snippet( 'maincolor') ?>

</head>

<body>
	<div class="all">

		<header class="seitenkopf">


			<a href="<?php echo $site->homePage()->url() ?>">
				<h1><?php echo $site->title()->html() ?></h1> 
			</a>



			<a href="#" class="toggle"><span class="fa fa-bars fa-3x"></span></a>


			<?php snippet( 'menu') ?>



		</header>


