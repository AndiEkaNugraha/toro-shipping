<?php

namespace App\Models;

use Core\App;
use Core\Model;

class User extends Model {
  protected static string $table = 'userAccount';

  public $id;
  public $email;
  public $name;
  public $password;
  public $seo_name;
  public $is_active;
  public $is_deleted;
  public $create_at;
  public $update_at;
  
  public static function findByEmail(string $email): ?User {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM userAccount WHERE email = ?', 
      [$email],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findById(string $id): ?User {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM userAccount WHERE id = ?', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
}