<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template: projects
  template:
    - default
    - projects
    - home
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  maincolor:
    label: 
      de: Akzentfarbe des Themes wählen (Die Standardeinstellung ist f37920)
      en: Choose the main-color for your theme (default is f37920)
    type:  color
    default: f37920