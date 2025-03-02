<?php
use App\Services\Authorization;
use Core\View;
use App\Services\CSRF;
use App\Models\Contact;
use App\Models\MetaPage;

if (!function_exists('partial')) {
    function partial(string $template, array $data = []): string {
      return View::partial($template, $data);
    }
  }

if (!function_exists('csrf_token')) {
  function csrf_token(): string {
    $tokenField = CSRF::TOKEN_FIELD_NAME;
    $token = CSRF::getToken();
    return <<<TAG
      <input type="hidden" name="$tokenField" value="$token" />
    TAG;
  }
  function csrf_token_value(): string {
    $token = CSRF::getToken();
    return $token;
  }
}

if (!function_exists('check')) {
  function check(string $action, mixed $resource = null): bool {
    return Authorization::check($action, $resource);
  }
}
if (!function_exists('truncateContent')) {
  function truncateContent($content, $limit = 100) {
    if (strlen($content) > $limit) {
        $truncated = substr($content, 0, $limit);
        // Ensure we don't cut off in the middle of a word
        $truncated = substr($truncated, 0, strrpos($truncated, ' '));
        return $truncated . '...';
    }
    return $content;
  }
}
if (!function_exists('contact')) {
  function contact() {
    return Contact::findAll();
  }
}
if (!function_exists('metaPage')) {
  function metaPage() {
    return MetaPage::findAll();
  }
  function metaPageBySeoUrl(): ?MetaPage {
    $seo_url = parse_url($_SERVER['REQUEST_URI'])['path'];
    return MetaPage::findBySeoUrl(trim($seo_url, '/'));
  }
}