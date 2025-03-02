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
  public static function uploadFile(array $file, string $uploadDir = 'uploads/'): ?string {
    // Pastikan folder tujuan ada
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Periksa apakah ada kesalahan dalam upload
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return null; // Gagal upload
    }

    // Ambil nama asli file
    $originalFileName = basename($file['name']);

    // Buat path tujuan
    $filePath = $uploadDir . $originalFileName;

    // Jika file dengan nama yang sama sudah ada, tambahkan timestamp
    if (file_exists($filePath)) {
        $fileInfo = pathinfo($originalFileName);
        $fileNameWithoutExt = $fileInfo['filename'];
        $fileExt = $fileInfo['extension'];
        $filePath = $uploadDir . $fileNameWithoutExt . '_' . time() . '.' . $fileExt;
    }

    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        return $filePath; // Kembalikan path file yang tersimpan
    }

    return null; // Jika gagal
  }
}