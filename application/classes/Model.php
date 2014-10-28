<?php defined('SYSPATH') or die('No direct script access.');

abstract class Model  {

  protected static $group = 'default';
	protected static $instances = array();

  public static function factory($name, $config=null, $group = NULL) {
		if ($group === NULL)
		{
			$group = $name.'#'.static::$group;
		}

		if (isset(Model::$instances[$group]))
		{
			// Return the current group if initiated already
			return Model::$instances[$group];
		}
		// Add the model prefix
    if (substr($name, 0, 6) != 'Model_') {
      $name = 'Model_'.$name;
    }
		Model::$instances[$group] = new $name($config);
    return Model::$instances[$group];
  }
}
