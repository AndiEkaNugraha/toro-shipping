<?php

namespace App\Models;

use Core\App;
use Core\Model;

class Faq extends Model {
  protected static string $table = 'faq';

  public $id;
  public $order_number;
  public $title;
  public $content;
  public $is_active;
  public $is_deleted;
  public $create_at;
  public $create_by;
  public $update_at;
  public $update_by;

  public static function findById(string $id): ?Faq {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM faq WHERE id = ? AND is_deleted = 0', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findAll() : array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM faq WHERE is_deleted = 0 order by create_at DESC' ,
      [],
      static::class
    );
    return $result ? $result : [];
  }
  public static function insert($data): ?Faq {
    $db = App::get('database');
    $db->query(
      'INSERT INTO faq (order_number, title, content, is_active, is_deleted, create_at, create_by, update_at, update_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
      [
        $data['order'],
        $data['title'],
        $data['content'],
        $data['status'],
        0,
        date('Y-m-d H:i:s'),
        $data['userAuthorize']->id,
        date('Y-m-d H:i:s'),
        $data['userAuthorize']->id
      ]
    );
    return static::findById($db->lastInsertId());
  }

}