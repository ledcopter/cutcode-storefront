<?php 
namespace Storefront\Components;

use Storefront\Config;
use PDO;

class Db {


  public static function connect(): PDO
  {
    $options = Config::getOptions();

    $dsn = "mysql:host={$options['dbhost']};dbname={$options['dbname']};charset={$options['dbcharset']}";

    $pdoOptions = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];

    return new PDO($dsn, $options['dbuser'], $options['dbpass'], $pdoOptions);
  }
}

?>