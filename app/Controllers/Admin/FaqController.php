<?php
namespace App\Controllers\Admin;

use Core\View;
use App\Services\Auth;
use App\Models\Faq;
use Core\Router;

class FaqController {
    public function index($user_seo) {
        $faq = Faq::findAll();
        $user = Auth::user();

        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/faq/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'faq',
                    'table' => true,
                    'listFaq' => $faq,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        }
        else {
            return View::render(
                template:'admin/faq/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'faq',
                    'table' => true,
                    'listFaq' => $faq,
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
                template:'admin/faq/detail',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'faq',
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
                    'form' => true,
                    'summerNote' => true,	
                ]
            );
        }
    }
    public function detail ($user_seo, $id) {
        $faq = Faq::find($id);
        // var_dump($faq);die;
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
                    'faq' => $faq,
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
                    'faq' => $faq,
                    'form' => true,
                    'summerNote' => true,	
                ]
            );
        }
    }

    public function insert($user_seo) {
        if (!isset($_POST['order']) || !isset($_POST['title']) || !isset($_POST['content']) || !isset($_POST['status'])) {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Please fill all required fields';
            Router::redirect('/administrator/'.$user_seo.'/faq/create');
        }
        if ($_POST['order'] == '' || $_POST['title'] == '' || $_POST['content'] == '' || $_POST['status'] == '') {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Please fill all required fields';
            Router::redirect('/administrator/'.$user_seo.'/faqfaq/create');
        }
        $user = Auth::user();
        Faq::insert([
            'order' => $_POST['order'],
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'status' => $_POST['status'],
            'userAuthorize' => $user
        ]);
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'FAQ created successfully';

        Router::redirect('/administrator/'.$user->seo_name.'/faq');
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
        $faq = Faq::find($id);
        $faq->order_number = $_POST['order'];
        $faq->title = $_POST['title'];
        $faq->content = $_POST['content'];
        $faq->is_active = $_POST['status'];
        $faq->update_by = $user->id;
        $faq->save();
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'FAQ updated successfully';

        Router::redirect('/administrator/'.$user->seo_name.'/faq');
    }

    public function delete($user_seo) {
        $user = Auth::user();
        $faq = Faq::find($_POST['id']);
        $faq->is_deleted = 1;
        $faq->update_by = $user->id;
        $faq->save();
        
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'FAQ deleted successfully';

        // Router::redirect('/administrator/'.$user->seo_name.'/faq');
    }
}