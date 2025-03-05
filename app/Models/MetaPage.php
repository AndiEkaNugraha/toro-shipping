<?php

namespace App\Models;

use Core\App;
use Core\Model;

class MetaPage extends Model {
  protected static string $table = 'metaPage';
  public $id;
  public $order_number;
  public $pageName;
  public $banner;
  public $showInNavbar;
  public $showInFooter;
  public $is_active;
  public $meta_title;
  public $meta_desc;
  public $seo_page;
  public $update_at;
  public $update_by;

  public static function findAll(): array {
    $db = App::get('database');
    $result = $db->fetchAll(
      'SELECT * FROM metaPage order by order_number ASC',
      [],
      static::class
    );
    return $result ? $result : [];
  }
  public static function findById(string $id): ?MetaPage {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM metaPage WHERE id = ?', 
      [$id],
      static::class
    );
    return $result ? $result : null;
  }
  public static function findBySeoUrl(string $seo_url): ?MetaPage {
    $db = App::get('database');
    $result = $db->fetch(
      'SELECT * FROM metaPage WHERE seo_page = ?', 
      [$seo_url],
      static::class
    );
    return $result ? $result : null;
  }
}