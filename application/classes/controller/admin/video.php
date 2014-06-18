<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Video extends Controller_Template
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

    public function action_index()
    {
        $view = View::factory('scripts/admin/manage/video_all');
        $this->template->content = $view;
        $video = ORM::factory('videos')
                ->limit(5)
                ->offset(0)
                ->find_all();
        $this->template->content->video = $video;
        $this->response->body($this->template);
    }

     public function after() {
//        $this->template->content->allCategories = '';
//        $this->template->content->res = '';
    }
    public function action_add()
    {
        if (isset($_POST['code']) && (!empty($_POST['code'])))
        {
            $vid = ORM::factory('videos');
            $vid->code = $_POST['code'];
            $vid->datetime = strtotime('now');
            if ($vid->save())
            {
                die(json_encode(array('res' => 'success')));
            }
            else
            {
                die(json_encode(array('res' => 'Не удалось сохранить')));
            }
        }
    }
    
    
    
    public function action_del()
    {
        if (isset($_POST['id']) && (!empty($_POST['id'])))
        {
            $vid = ORM::factory('videos')
                    ->where('id_video','=',$_POST['id'])
                    ->find();
            if ($vid->delete())
            {
                die(json_encode(array('res' => 'success')));
            }
            else
            {
                die(json_encode(array('res' => 'Не удалось удалить элемент')));
            }
        }
    }
    

}