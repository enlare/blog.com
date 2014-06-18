<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ckupload extends Controller_Template
{

    public $template = 'layouts/administrator';
    public $auto_render = TRUE;

    public function before()
    {
        parent:: before();

        if (!AuthAdapter::isAdmin())
        {
            $this->request->redirect('admin/login');
            //echo 'не админ';
        }
        else
        {
            $this->template->content = '';
        }
    }

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
    }

    public function after()
    {
        
    }

    public function action_index()
    {
        //var_dump($_FILES);
//     	var_dump($_GET['CKEditorFuncNum']);
//     	die();
// var_dump($_FILES['upload']['name']);
// die();
        $callback = $_GET['CKEditorFuncNum'];
        $file_name = $_FILES['upload']['name'];
        $file_name_tmp = $_FILES['upload']['tmp_name'];
        $configGeneral = Kohana::$config->load('general');
//        $file_new_name = '/var/www/public_html/trvel.com/upload/';
        $file_new_name = $configGeneral->upload_directory;
        $full_path = $file_new_name . $file_name;
        $http_path = URL::base(true, true) . 'image/full/' . $file_name;
        //var_dump($file_name_tmp);
        $error = '';
        if (is_uploaded_file($file_name_tmp))
        {
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $file_new_name . $_FILES["upload"]["name"]))
            {
               // echo $http_path;
                //$this->response->send_file($http_path);
                // 	echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.",  \"".$http_path."\", \"".$error."\" );</script>";
            }
            else
            {
                $error = 'Some error occured please try again later';
                $http_path = '';
            }
        }

        echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.",  \"".$http_path."\", \"".$error."\" );</script>";
    }

}