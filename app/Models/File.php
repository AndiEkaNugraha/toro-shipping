<?php

namespace App\Models;

use Core\App;
use Core\Model;

class File extends Model {
  protected static string $table = 'files';

  public $id;
  public $page;
  public $id_page;
  public $file;
  public $is_active;
  public $is_deleted;
  public $create_at;
  public $create_by;
  public $update_at;
  public $update_by;

  public static function findById(string $id): ?File {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM files WHERE id = ? AND is_deleted = 0', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findAll() : array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM files WHERE is_deleted = 0 order by create_at DESC' ,
      [],
      static::class
    );
    return $result ? $result : [];
  }
}