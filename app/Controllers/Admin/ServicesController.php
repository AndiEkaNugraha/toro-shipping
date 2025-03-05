<?php
namespace App\Controllers\Admin;

use Core\View;
use App\Services\Auth;
use App\Models\Service;
use Core\Router;

class ServicesController {
    public function index($user_seo) {
        $services = Service::findAll();
        $user = Auth::user();

        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/service/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'services',
                    'table' => true,
                    'listServices' => $services,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        }
        else {
            return View::render(
                template:'admin/service/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'services',
                    'table' => true,
                    'listServices' => $services,
                ]
            );
        }
    }
    public function create ($user_seo) {
        $user = Auth::user();
        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/service/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'services',
                    'form' => true,
                    'ckeditor' => true,
                    'response' => true,
                    'filepond' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        } else {
            return View::render(
                template:'admin/service/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'services',
                    'form' => true,
                    'ckeditor' => true,
                    'filepond' => true,
                ]
            );
        }
    }
    public function detail ($user_seo, $id) {
        $service = Service::find($id);
        // var_dump($service);die;
        $user = Auth::user();
        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/faq/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'faq',
                    'faq' => $service,
                    'form' => true,
                    'summerNote' => true,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        } else {
            return View::render(
                template:'admin/faq/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'faq',
                    'faq' => $service,
                    'form' => true,
                    'summerNote' => true,	
                ]
            );
        }
    }

    public function insert($user_seo) {
        echo "insert\n";
        var_dump($_POST);
        echo "files \n";
        var_dump($_FILES);
    }

    public function update($user_seo, $id) {
        if (!isset($_POST['order']) || !isset($_POST['title']) || !isset($_POST['content']) || !isset($_POST['status'])) {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Please fill all required fields';
            Router::redirect('/administrator/'.$user_seo.'/faq/'.$id);
        }
        if ($_POST['order'] == '' || $_POST['title'] == '' || $_POST['content'] == '' || $_POST['status'] == '') {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Please fill all required fields';
            Router::redirect('/administrator/'.$user_seo.'/faq/'.$id);
        }
        $user = Auth::user();
        $service = Service::find($id);
        $service->order_number = $_POST['order'];
        $service->title = $_POST['title'];
        $service->content = $_POST['content'];
        $service->is_active = $_POST['status'];
        $service->update_by = $user->id;
        $service->save();
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'FAQ updated successfully';

        Router::redirect('/administrator/'.$user->seo_name.'/faq');
    }

    public function delete($user_seo) {
        $user = Auth::user();
        $service = Service::find($_POST['id']);
        $service->is_deleted = 1;
        $service->update_by = $user->id;
        $service->save();
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'FAQ deleted successfully';

        // Router::redirect('/administrator/'.$user->seo_name.'/faq');
    }
}