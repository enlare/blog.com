<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Login extends Controller_Template
{

    public $template = 'layouts/admin_login';
    public $auto_render = TRUE;
//
//    public function before()
//    {
//        if (AuthAdapter::isAdmin())
//        {
//
//            $this->request->redirect('admin/post');
//        }
//    }
//
//    public function __construct(Request $request, Response $response)
//    {
//        parent::__construct($request, $response);
//    }
//
//    public function after()
//    {
//        
//    }

    public function action_index()
    {
        $view = View::factory('scripts/admin/login/index');
        $this->template->content = $view;
        if (isset($_POST) && (!empty($_POST)))
        {
            if (AuthAdapter::authorizeAdmin($_POST['password']))
            {
                $this->request->redirect(Route::get('admin')->uri(array('controller' => 'post', 'action'     => '')));
            }
            else
            {
                $this->template->content->errors = 'неверный пароль!';
            }
        }
    }

    // private function validate( $_POST )
    // {
    //    $val = Validation::factory($_POST)->rule('password', 'not_empty')
    //                                   ->rule('password', 'min_length', array(1))
    //                                   ->label('password', __('Password'));
    //    return $val;
    // }
}