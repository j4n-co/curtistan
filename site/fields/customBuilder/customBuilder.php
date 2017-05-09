<?php

use Kirby\Panel\Models\Page\Blueprint\Field;

class CustomBuilderField extends BuilderField {

  static public $assets = array(
    "css" => array("custom.css"),
    "js" => array("custom.js")
  );

  public function content() {
    return tpl::load(__DIR__ . DS . 'template.php', array('field' => $this));
  }

};