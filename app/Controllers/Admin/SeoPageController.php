<?php
namespace App\Controllers\Admin;

use Core\View;
use App\Services\Auth;
use App\Models\MetaPage;
use Core\Router;

class SeoPageController {
    public function index($user_seo) {
        $seoPage = MetaPage::findAll();
        $user = Auth::user();
       
        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/seoPage/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'seoPage',
                    'table' => true,
                    'seoPage' => $seoPage,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        }
        else {
            return View::render(
                template:'admin/seoPage/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'seoPage',
                    'table' => true,
                    'seoPage' => $seoPage,
                ]
            );
        }
    }
    public function detail ($user_seo, $id) {
        $seoPage = MetaPage::find($id);
        $user = Auth::user();
        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/seoPage/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'seoPage',
                    'seoPage' => $seoPage,
                    'form' => true,
                    'summerNote' => true,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        } else {
            return View::render(
                template:'admin/seoPage/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'seoPage',
                    'seoPage' => $seoPage,
                    'form' => true,
                    'summerNote' => true,	
                ]
            );
        }
    }
    public function update($user_seo, $id) {
        if (!isset($_POST['order']) || !isset($_POST['pageName']) || !isset($_POST['showInNavbar']) || !isset($_POST['showInFooter']) || !isset($_POST['status']) || !isset($_POST['metaTitle']) || !isset($_POST['metaDesc'])) {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'All fields are required';
            Router::redirect("/administrator/$user_seo/seo-page/$id");
        }

        $metaPage = MetaPage::find($id);
        $order = $_POST['order']??null;
        $pageName = $_POST['pageName']??null;
        $showInNavbar = isset($_POST['showInNavbar']) ? 1 : 0;
        $showInFooter = isset($_POST['showInFooter']) ? 1 : 0;
        $status = $_POST['status']??null;
        $metaTitle = $_POST['metaTitle']??null;
        $metaDesc = $_POST['metaDesc']??null;
        $update_at = date('Y-m-d H:i:s');
        $update_by = Auth::user()->id;

        if (!empty($_FILES['banner']['name'])) {
            $bannerPath = MetaPage::uploadFile($_FILES['banner'], 'file/seoPage/');
            $nameFile = explode('/', $bannerPath);
            $banner = end($nameFile);
        }

        $metaPage->banner = $banner??$metaPage->banner;
        $metaPage->order_number = $order??$metaPage->order_number;
        $metaPage->pageName = $pageName??$metaPage->pageName;
        $metaPage->showInNavbar = $showInNavbar??$metaPage->showInNavbar;
        $metaPage->showInFooter = $showInFooter??$metaPage->showInFooter;
        $metaPage->is_active = $status??$metaPage->is_active;
        $metaPage->meta_title = $metaTitle??$metaPage->meta_title;
        $metaPage->meta_desc = $metaDesc??$metaPage->meta_desc;
        $metaPage->update_at = $update_at;
        $metaPage->update_by = $update_by;
        $metaPage->save();
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Data has been updated';
        Router::redirect("/administrator/$user_seo/seo-page");
    }
}