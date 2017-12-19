<?php

kirbytext::$tags['button'] = array(
  'attr' => array(
    'url', 'icon', 'color', 'popup'
  ),
  'html' => function($tag) {

    $text = $tag->attr('button');
    $url    = $tag->attr('url');
    $icon    = $tag->attr('icon');
    $color    = $tag->attr('color', 'grey');
    $popup    = $tag->attr('popup');

	  if ($popup == 'yes'){
	  $blank = ' target="_blank" ';
	  }

	  if(!empty($icon)){
    		return '<a href="' . $url . '"' . $blank . '><button class="button ' . $color . '-btn"><span class="fa fa-' . $icon . '" ></span> ' . $text . '</button></a>';
	  } else {
    		return '<a href="' . $url . '"' . $blank . '><button class="button ' . $color . '-btn">' . $text . '</button></a>';
	  }

  }
);