<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Menu extends Controller_Template
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
        $view = View::factory('scripts/admin/manage/menu');

        $existMenus = ORM::factory('menus')
            ->where('id_parent', '=', 0)
            ->order_by('position', 'ASC')
            ->find_all()
        ;

        // $submenu
        $menu = array();
        foreach ($existMenus as $key => $value)
        {
            $sub = ORM::factory('menus')
                ->where('id_parent', '=', $value->id_menu)
                ->find_all();
            $menu[] = array('main' => $value, 'sub'  => !empty($sub) ? $sub : '');
        }

        $posts = ORM::factory('posts')->find_all();
        $category = ORM::factory('categories')->find_all();


        $this->template->content = $view;
        $this->template->content->menu = $menu;
        $this->template->content->posts = $posts;
        $this->template->content->category = $category;
        $this->template->content->existMenus = $existMenus;
        $this->response->body($this->template);
    }
//
//    public function action_newmenu()
//    {
//        $view = View::factory('scripts/admin/manage/menu');
//
//        $allCategories = ORM::factory('menus')->find_all();
//        if (isset($_POST) && (!empty($_POST)))
//        {
//            $post = $this->validate($_POST);
//
//            if ($post->check())
//            {
//                $newMenu = ORM::factory('menus');
//                $newMenu->title = $post['menu_title'];
//                $newMenu->id_parent = 0;
//                $newMenu->position = 0;
//                if ($newMenu->save())
//                {
//                    $menuPost = ORM::factory('menupost');
//                    $menuPost->id_menu = $newMenu->pk();
//                    if ($post['href_var'] == 'category')
//                    {
//                        $menuPost->id_category = $post['categoryId'];
//                    }
//                    else
//                    {
//                        $menuPost->id_post = $post['postId'];
//                    }
//                    $menuPost->save();
//                    die(json_encode(array('error'   => '', 'content' => array('titleMenu' => $newMenu->title, 'idMenu'    => $newMenu->pk(), 'pos'       => $newMenu->position))));
//                }
//            }
//            else
//            {
//                die(json_encode(array('error' => $post->errors('validation'))));
//            }
//        }
//
//        $this->template->content = $view;
//        $this->template->content->allCategories = $allCategories;
//        $this->response->body($this->template);
//    }

    public function action_newsubmenu()
    {
        $allCategories = ORM::factory('menus')->find_all();
        if (isset($_POST) && (!empty($_POST)))
        {
            $post = $this->validate($_POST);

            if ($post->check())
            {
                $newMenu = ORM::factory('menus');
                $newMenu->title = $post['menu_title'];
                $newMenu->id_parent = $post['parent'];
                $newMenu->position = 0;
                if ($newMenu->save())
                {
                    $menuPost = ORM::factory('menupost');
                    $menuPost->id_menu = $newMenu->pk();
//                    if ($post['href_var'] == 'category')
//                    {
//                        $menuPost->id_category = $post['categoryId'];
//                    }
//                    else
//                    {
                        $menuPost->id_post = $post['postId'];
//                    }
                    $menuPost->save();
                    die(json_encode(array('error'   => '', 'content' => array(
                                'titleMenu' => $newMenu->title,
                                'idMenu'    => $newMenu->pk(),
                                'pos'       => $newMenu->position,
                                'parent'    => $newMenu->id_parent))));
                }
            }
            else
            {
                die(json_encode(array('error' => $post->errors('validation'))));
            }
        }
    }
    
    public function action_delsub(){
        $menu = ORM::factory('menus')
                ->where('id_menu','=',$_POST['idMenu'])
                ->find();
        if ($menu->delete())
        {
            die(json_encode(array('status'=>'success','id'=>$_POST['idMenu'])));
        }
        else
        {
            die(json_encode(array('err'=>'невозможно удалить')));
        }
    }

    


    public function action_position()
    {
        if (isset($_POST) && (!empty($_POST)))
        {
            foreach ($_POST['pos'] as $key => $value)
            {
                $menu = ORM::factory('menus')->where('id_menu', '=', $value)->find();
                $menu->position = $key;
                $menu->save();
            }
            die(json_encode(array('error' => '')));
        }
    }

    private function validate($_POST)
    {
        $val = Validation::factory($_POST);
        if (isset($_POST['menu_title']))
        {
            $val->rule('menu_title', 'not_empty')
                ->label('menu_title', __('Меню'));
        }
        if (isset($_POST['submenu_title']))
        {
            $val->rule('submenu_title', 'not_empty')
                ->label('submenu_title', __('Подменю'));
        }
        return $val;
    }

}