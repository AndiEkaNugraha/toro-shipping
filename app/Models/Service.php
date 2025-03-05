<?php

namespace App\Models;

use Core\App;
use Core\Model;

class Service extends Model {
  protected static string $table = 'services';

  public $id;
  public $order_number;
  public $title;
  public $synopsys;
  public $banner;
  public $squereBanner;
  public $icon;
  public $file;
  public $content;
  public $seo_page;
  public $is_active;
  public $is_deleted;
  public $meta_title;
  public $meta_desc;
  public $create_at;
  public $create_by;
  public $update_at;
  public $update_by;

  public static function findById(string $id): ?Faq {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM services WHERE id = ? AND is_deleted = 0', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findAll() : array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM services WHERE is_deleted = 0 order by create_at DESC' ,
      [],
      static::class
    );
    return $result ? $result : [];
  }
}