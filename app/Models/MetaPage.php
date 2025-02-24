<?php

namespace App\Models;

use Core\App;
use Core\Model;

class MetaPage extends Model {
  protected static string $table = 'metaPage';
  public $id;
  public $pageName;
  public $meta_title;
  public $meta_desc;
  public $seo_page;
  public $update_at;
  public $update_by;

  public static function findAll(): array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM metaPage',
      [],
      static::class
    );
    return $result ? $result : [];
  }
}