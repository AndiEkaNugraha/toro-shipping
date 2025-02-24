<?php

namespace App\Models;

use Core\App;
use Core\Model;

class Contact extends Model {
  protected static string $table = 'contact';

  public $id;
  public $platform;
  public $redirect_to;
  public $is_active;
  public $update_at;
  public $update_by;

  public static function findById(string $id): ?Contact {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM contact WHERE id = ?', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findAll() : array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM contact',
      [],
      static::class
    );
    return $result ? $result : [];
  }
}