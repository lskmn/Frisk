<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  submenu:
    label:
      de: Untermenü
      en: Submenu
    type: checkbox
    text:
      de: Zeige ein Untermenü am oberen Rand der Seite
      en: Display a sub-menu at the top of the page
  backbutton:
    label: 
      de: Zurück Button
      en: Back-button
    type: checkbox
    text: 
      de: Zeige einen Zurück-Button am unteren Rand der Seite
      en: Display a back-button at the bottom of the page
