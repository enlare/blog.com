<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Reviews extends Controller_Template
{

    public $template = 'layouts/administrator';
    public $auto_render = TRUE;

    public function before()
    {
        parent:: before();

        if (!AuthAdapter::isAdmin())
        {
            $this->request->redirect('admin/login');
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
        $this->template->content->allCategories = '';
        $this->template->content->res = '';
    }

    public function action_index()
    {
        $view = View::factory('scripts/admin/manage/reviews');
        $this->template->content = $view;
        $this->response->body($this->template);
    }

    public function action_re()
    {
        if (isset($_POST['id']) && (!empty($_POST['id'])))
        {
            $review = ORM::factory('review')
                    ->where('id_review', '=', $_POST['id'])
                    ->find();
            if ($review->pk())
            {
                $config = Kohana::$config->load('email');
                $configGeneral = Kohana::$config->load('general');
                Email::connect($config);

                $to = $review->email_from;
                $subject = htmlspecialchars('Ответ на ваш отзыв на сайте ' . $configGeneral->site_name);
                $from = $configGeneral->admin_email;
                $message = htmlspecialchars($_POST['text']);

                if (Email::send($to, $from, $subject, $message, $html = false))
                {
                    die(json_encode(array('res' => 'success')));
                }
                else
                {
                    die(json_encode(array('res' => 'Отправка не удалась')));
                }
            }
        }
    }

    public function action_delete()
    {
        if (isset($_POST['id']) && (!empty($_POST['id'])))
        {
            $review = ORM::factory('review')
                    ->where('id_review', '=', $_POST['id'])
                    ->find();
            if ($review->delete())
            {
                die(json_encode(array('res' => 'success')));
            }
            else
            {
                die(json_encode(array('res' => 'Невозможно удалить элемент')));
            }
        }
    }
    
       public function action_changestatus()
    {
        if (isset($_POST['id']) && (!empty($_POST['id'])))
        {
            $review = ORM::factory('review')
                    ->where('id_review', '=', $_POST['id'])
                    ->find();
            $review->status = $_POST['status'];
            if ($review->save())
            {
                die(json_encode(array('res' => 'success')));
            }
            else
            {
                die(json_encode(array('res' => 'Невозможно удалить элемент')));
            }
        }
    }

}