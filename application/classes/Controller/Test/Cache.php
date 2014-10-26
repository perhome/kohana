<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test_Cache extends Controller {

  public function before()
  {
    $this->response->headers('cache-control', 'max-age=5');
  }
  public function action_index()
  {
    $output  =  '缓存五秒钟。 当前时间戳:';
    $output .= time();
    $this->response->body($output);
  }
} // End
