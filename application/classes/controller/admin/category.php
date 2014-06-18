<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Category extends Controller_Template
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
        $this->template->content->allCategories = '';
        $this->template->content->res = '';
    }

    public function action_index()
    {
        $view = View::factory('scripts/admin/manage/cat');

        $all = ORM::factory('categories')
            ->find_all();
        $this->template->content = $view;
        $this->template->content->allCategories = $all;
        $this->response->body($this->template);
    }

    public function action_edit()
    {
        $idCategory = $this->request->param('id');

        $categories = ORM::factory('categories')
            ->where('id_category', '=', $idCategory)
            ->find();
        if ($categories->pk())
        {

            $res[] = array(
                'idCategory' => $categories->id_category,
                'title'      => $categories->title,
                'is_comment' => $categories->is_comment
            );

            die(json_encode($res));
        }
        else
        {
            die(json_encode(array('error' => 'неизвестная ошибка')));
        }
    }

    public function action_delete()
    {
        if (isset($_POST) && (!empty($_POST)))
        {
            $del = ORM::factory('categories')
                ->where('id_category', '=', $_POST['idCategory'])
                ->find();
            if ($del->delete())
            {
                $posts = ORM::factory('posts')
                    ->where('id_category', '=', $_POST['idCategory'])
                    ->find_all();
                if (!empty($posts))
                {
                    $otherCat = ORM::factory('categories')
                        ->where('title', '=', 'другое')
                        ->find();
                    foreach ($posts as $key => $value)
                    {
                        $value->id_category = $otherCat->id_category;
                        $posts->save();
                    }
                }


//                Удалить категорию а ее посты сдлать none category!!!!,

                die(json_encode(array('msg' => 'Запись успешно удалена', 'err' => '')));
            }
            else
            {
                die(json_encode(array('err' => 'Неизвестная ошибка', 'msg' => '')));
            }
        }
    }

    public function action_new()
    {
        if (isset($_POST) && (!empty($_POST)))
        {
            $post = $this->validate($_POST);

            if ($post->check())
            {

                $categoryNew = ORM::factory('categories');
                $categoryNew->title = $post['title'];
                $categoryNew->is_comment = ($post['is_comment'] == true) ? 'yes' : 'no';
                
//                $post = ORM::factory('posts');
                
                $urlstr = urlencode($categoryNew->translitIt(strtolower($post['catTitle'])));
                $categoryNew->url = $urlstr;
                $categoryNew->non_edit = 0;
                if ($categoryNew->save())
                {

                    $cat = ORM::factory('categories')
                        ->where('id_category', '=', $categoryNew->pk())
                        ->find();
                    die(json_encode(array(
                            'error' => '',
                            'cat'   => array(
                                'title'       => $cat->title,
                                'is_comment'  => $cat->is_comment,
                                'id_category' => $cat->id_category))));
                }
            }
            else
            {
                die(json_encode(array('error' => $post->errors('validation'))));
            }
        }
    }

    public function action_save()
    {
        if (isset($_POST) && (!empty($_POST)))
        {
//            $post = $this->validate($_POST);
//            var_dump(Session::instance());
//            if ($post->check())
//            {
                $categories = ORM::factory('categories')
                    ->where('id_category', '=', $_POST['idCategory'])
                    ->find();
//                $categories->title = $post['title'];
                $categories->is_comment = ($_POST['is_comment'] == 'true') ? 'yes' : 'no';


                if ($categories->save())
                {
                    $newCat = ORM::factory('categories')
                        ->where('id_category', '=', $_POST['idCategory'])
                        ->find();
                    die(json_encode(array(
//                            'title'      => $newCat->title,
                            'is_comment' => $newCat->is_comment
                        )));
                }
                else
                {
                    die(json_encode(array('error' => 'ошибка сохранения')));
                }
//            }
//            else
//            {
//                die(json_encode(array('error' => $post->errors('validation'))));
//            }
        }
    }

//    private function validate($_POST)
//    {
//        $val = Validation::factory($_POST)
//            ->rule('title', 'not_empty')
//            ->label('title', __('Название категории'))
//            ->rule('catTitle', 'Model_Categories::urlunique', array(':value', ':validation', ':field'))
//            ->label('catTitle', 'url');
//
//        return $val;
//    }

}