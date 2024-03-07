<?php 
namespace Storefront\Models;

use Storefront\Components\Db;

class Products
{
  public static function getAll()
  {
    $pdo = Db::connect();
    $stmt = $pdo->query('SELECT * FROM products');
    return $stmt->fetchAll();
  }

  public static function getOne(int $id)
  {
    $pdo = Db::connect();
    $stmt = $pdo->prepare('SELECT * FROM products WHERE `id` = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
  }
}