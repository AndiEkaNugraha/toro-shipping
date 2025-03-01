<?php
namespace App\Controllers\Admin;

use Core\View;
use App\Services\Auth;
use App\Models\Contact;
use Core\Router;

class ContactController {
    public function index($user_seo) {
        $user = Auth::user();
        $phone = Contact::find(1);
        $email = Contact::find(2);
        $facebook = Contact::find(3);
        $twitter = Contact::find(4);
        $instagram = Contact::find(5);
        $linkedin = Contact::find(6);

        if (isset($_SESSION['status']) && $_SESSION['status'] != null) {
            $context = $_SESSION['status'];
            $message = $_SESSION['message'];
            $_SESSION['status'] = null;
            $_SESSION['message'] = null;
            return View::render(
                template:'admin/contact/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'contact',
                    'form' => true,
                    'phone' => $phone,
                    'email' => $email,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'instagram' => $instagram,
                    'linkedin' => $linkedin,
                    'response' => true,
                    'context' => $context,
                    'message' => $message
                ]
            );
        } else {
            return View::render(
                template:'admin/contact/index',
                layout: 'layout/admin/index',
                data: [
                    'userAuthorize' => $user,
                    'page' => 'contact',
                    'form' => true,
                    'phone' => $phone,
                    'email' => $email,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'instagram' => $instagram,
                    'linkedin' => $linkedin
                ]
            );
        }
    }
    public function update($user_seo) {
        $user = Auth::user();
        $email = array_key_exists('email', $_POST) ? $_POST['email'] : null;
        $phone = array_key_exists('phone', $_POST) ? $_POST['phone'] : null;
        $facebook = array_key_exists('facebook', $_POST) ? $_POST['facebook'] : null;
        $twitter = array_key_exists('twitter', $_POST) ? $_POST['twitter'] : null;
        $instagram = array_key_exists('instagram', $_POST) ? $_POST['instagram'] : null;
        $linkedin = array_key_exists('linkedin', $_POST) ? $_POST['linkedin'] : null;
               
        // var_dump($twitter);die;
        $phoneDb = Contact::find(1);
        $emailDb = Contact::find(2);
        $facebookDb = Contact::find(3);
        $twitterDb = Contact::find(4);
        $instagramDb = Contact::find(5);
        $linkedinDb = Contact::find(6);
        
        if ($phone !== null) {
            if ($phoneDb->redirect_to !== $phone) {
                $phoneDb->redirect_to = $phone;
                $phoneDb->save();
            }
        }
        if ($email !== null) {
            if ($emailDb->redirect_to !== $email) {
                $emailDb->redirect_to = $email;
                $emailDb->save();
            }
        }
        if ($facebook !== null) {
            if ($facebookDb->redirect_to !== $facebook) {
                $facebookDb->redirect_to = $facebook;
                $facebookDb->save();
            }
        }
        if ($twitter !== null) {
            if ($twitterDb->redirect_to !== $twitter) {
                $twitterDb->redirect_to = $twitter;
                $twitterDb->save();
            }
        }
        if ($instagram !== null) {
            if ($instagramDb->redirect_to !== $instagram) {
                $instagramDb->redirect_to = $instagram;
                $instagramDb->save();
            }
        }
        if ($linkedin !== null) {
            if ($linkedinDb->redirect_to !== $linkedin) {
                $linkedinDb->redirect_to = $linkedin;
                $linkedinDb->save();
            }
        }
        
        $phoneDb = Contact::find(1);
        $emailDb = Contact::find(2);
        $facebookDb = Contact::find(3);
        $twitterDb = Contact::find(4);
        $instagramDb = Contact::find(5);
        $linkedinDb = Contact::find(6);

        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Contact updated successfully';

        Router::redirect('/administrator/'.$user->seo_name.'/contact');
    }
}
