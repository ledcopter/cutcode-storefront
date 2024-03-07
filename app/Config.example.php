<?php 
namespace Storefront;

class Config {

  protected static $options = [
    'dbhost' => 'example.host',
    'dbname' => 'example_name',
    'dbuser' => 'example_user',
    'dbpass' => 'example_pass',
    'dbcharset' => 'utf8',
  ];

  public static function getOptions(): array
  {
    return self::$options;
  }
}