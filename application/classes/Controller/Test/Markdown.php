<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test_Markdown extends Controller {

  public function action_index()
  {
    echo Darkmown::parse('This is **Sparta**!!!');
  }
} // End
