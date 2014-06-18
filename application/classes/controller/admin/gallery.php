<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Gallery extends Controller_Template
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
        $view = View::factory('scripts/admin/manage/gallery');



        $this->template->content = $view;

        $this->response->body($this->template);
    }

}