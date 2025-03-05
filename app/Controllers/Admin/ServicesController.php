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
        $order = $_POST['order']??null;
        $title = $_POST['title']??null;
        $synopsys = $_POST['synopsys']??null;
        $content = $_POST['content']??null;
        $banner = null;
        $thumb = null;
        $icon = null;
        $fileName = [];
        $status = $_POST['status']??0;
        $seo = $_POST['seo']??null;
        $metaTitle = $_POST['metaTitle']??null;
        $metaDesc = $_POST['metaDesc']??null;
        $user = Auth::user();

        if (!empty($_FILES['banner']['name'])) {
            $bannerPath = Service::uploadFile($_FILES['banner'], 'file/service/img/');
            $nameFile = explode('/', $bannerPath);
            $banner = end($nameFile);
        }
        if (!empty($_FILES['thumbnail']['name'])) {
            $thumbPath = Service::uploadFile($_FILES['thumbnail'], 'file/service/thumb/');
            $nameFile = explode('/', $thumbPath);
            $thumb = end($nameFile);
        }
        if (!empty($_FILES['icon']['name'])) {
            $iconPath = Service::uploadFile($_FILES['icon'], 'file/service/icon/');
            $nameFile = explode('/', $iconPath);
            $icon = end($nameFile);
        }
        // var_dump($_FILES['filepond']);die;
        if (!empty($_FILES['filepond']['name'][0] !== "")) {
            for ($i = 0; $i < count($_FILES['filepond']['name']); $i++) {
                // Extract data for the current file
                $fileData = [
                    'name' => $_FILES['filepond']['name'][$i],
                    'full_path' => $_FILES['filepond']['full_path'][$i],
                    'type' => $_FILES['filepond']['type'][$i],
                    'tmp_name' => $_FILES['filepond']['tmp_name'][$i],
                    'error' => $_FILES['filepond']['error'][$i],
                    'size' => $_FILES['filepond']['size'][$i],
                ];
        
                // Now you can use the $fileData array to process each file individually
                $filePath = Service::uploadFile($fileData, 'file/service/file/');
                $nameFile = explode('/', $filePath);
                $uploadedFile = end($nameFile);
                array_push($fileName, $uploadedFile);
                
                // Insert into database or perform other actions with $fileData
                // ...
            }
        }

        $service = [
            'order_number' => $order,
            'title' => $title,
            'synopsys' => $synopsys,
            'content' => $content,
            'banner' => $banner??"",
            'squereBanner' => $thumb??"",
            'icon' => $icon??"",
            'file' => json_encode($fileName)??[],
            'is_active' => $status,
            'seo_page' => $seo,
            'meta_title' => $metaTitle,
            'meta_desc' => $metaDesc,
            'create_at' => date('Y-m-d H:i:s'),
            'create_by' => $user->id,
            'update_by' => "",
        ];

        $return = Service::create($service);
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Service created successfully';
        Router::redirect('/administrator/'.$user_seo.'/services');
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