<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Post extends Controller_Template
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
        $view = View::factory('scripts/admin/manage/postall');

        $all = ORM::factory('posts')
            ->order_by('datetime', 'DESC')
                 ->limit(15)
                ->offset(0)
                ->order_by('datetime', 'DESC')
            ->find_all();

        $this->template->content = $view;
        $this->template->content->allPost = $all;
        $this->response->body($this->template);
    }

    public function action_edit()
    {
        $idPost = $this->request->param('id');

        $post = ORM::factory('posts')
            ->where('id_post', '=', $idPost)
            ->find();
        if ($post->pk())
        {
            $cat = ORM::factory('categories')
                ->where('id_category', '=', $post->id_category)
                ->find();

            $post = ORM::factory('posts')
                ->where('id_post', '=', $idPost)
                ->find();
            $allCategory = ORM::factory('categories')
                ->find_all();
            $cat = array();
            foreach ($allCategory as $key => $value)
            {
                $cat[$key]['id_category'] = $value->id_category;
                $cat[$key]['title'] = $value->title;
            }
 $postTags = ORM::factory('posttags')->select('tags.title')->join('tags')->on('posttags.id_tag','=','tags.id_tag')
                                                  ->where('id_post','=', $post->id_post)->find_all();
            $alreadyTags = array();
            foreach($postTags as $item)
            {
                $alreadyTags[] = array('title' => $item->title, 'value' => 'exist_'.$item->id_tag);
            }
            $res[] = array('idPost'         => $post->id_post,
                'title'          => $post->title,
                'date'           => date('d/m/Y', $post->datetime),
//                'comments'       => (count($comments) != 0 ) ? $comments : '',
                'id_category'    => $post->id_category,
                'content'        => $post->textfield,
                 'description'    => $post->description,
                'all_categories' => $cat,
                'tags'=> $alreadyTags
            );



            die(json_encode($res));
        }
    }

    public function action_delete()
    {
        if (isset($_POST) && (!empty($_POST)))
        {
            $del = ORM::factory('posts')
                ->where('id_post', '=', $_POST['idPost'])
                ->find();
            if ($del->delete())
            {
                  ORM::factory('posttags')->myDeleteAll($_POST['idPost']);
//                И УДАЛЕНИЕ КАМЕНТОВ!!!!,

                die(json_encode(array('msg' => 'Запись успешно удалена', 'err' => '', 'ID'  => $_POST['idPost'])));
            }
            else
            {
                die(json_encode(array('err' => 'Неизвестная ошибка', 'msg' => '')));
            }
        }
    }

    public function action_new()
    {
        $view = View::factory('scripts/admin/manage/post');

        $allCategories = ORM::factory('categories')->find_all();
        if (isset($_POST) && (!empty($_POST)))
        {
            $post = $this->validate($_POST);

            if ($post->check())
            {

                $newPost = ORM::factory('posts');

                $urlstr = '';
//var_dump($_POST);


//var_dump($post['url']);
//  die();
//                if (preg_match('/[^A-Za-z0-9_\-]/', strtolower($post['url'])))
//                {
//                    $urlstr = $newPost->translitIt(strtolower($post['url']));
                    //$urlstr = preg_replace('/[^A-Za-z0-9_\-]/', '', $urlstr);
                    //$urlstr =
//                }
//                var_dump($urlstr);
//                die();
                $category = ORM::factory('categories')
                        ->where('id_category','=',$post['categoryId'])
                        ->find();
                
                
                $newPost->title = $post['title'];
                $newPost->textfield = $post['content'];
                $newPost->id_category = $post['categoryId'];
                 $newPost->description = $post['description'];
                $tagIds = array();
                if(!empty($post['tags']))
                {
                    foreach($post['tags'] as $tag)
                    {
                        if(preg_match('/^exist_/',$tag))
                        {
                            $tagIds[] = preg_replace('/^exist_/', '',$tag);
                        }
                        else
                        {
                            $tagIds[] = ORM::factory('tags')->addNew($tag);
                        }
                    }
                }
//                var_dump($urlstr);
//                echo (empty($post['date'])) ? strtotime('now') : strtotime($post['date']);
//                var_dump($_POST['date']);
//                if ($_POST['date'] != '')
//                {
//                    echo strtotime($post['date']);
//                }
//                else
//                {
//                    echo '222';
//                }
//                $v =( ) ? () : 'xxx';
//                echo $v;
//                die();
                $newPost->datetime = empty($post['date']) ? strtotime('now') : strtotime($post['date']);
//var_dump($post['date']);
//var_dump(strtotime('now'));
//echo date('m/d/Y', '1348440655');
//die();
                if ($newPost->save())
                {
                    $post=ORM::factory('posts')->where('id_post','=',$newPost->pk())->find();
//                    echo ($category->url != 'events') ? $category->url.'/'.$newPost->pk() : 'events/'.date('m/d/Y',$post->datetime).'/'.$newPost->pk();
//                    echo date('m/d/Y',$post->datetime);
//                    die();
                    $post->url = ($category->url != 'events') ? $category->url.'/'.$newPost->pk() : 'events/'.date('m/d/Y',$post->datetime).'/'.$newPost->pk();
                    $post->save();
                    foreach($tagIds as $id)
                    {
                        $postTags = ORM::factory('posttags');
                        $postTags->id_post = $newPost->pk();
                        $postTags->id_tag = $id;
                        $postTags->save();
                    }
                    
                    die(json_encode(array('error' => '')));
                }
            }
            else
            {
                die(json_encode(array('error' => $post->errors('validation'))));
            }
        }

        $this->template->content = $view;
        $this->template->content->allCategories = $allCategories;
//        $this->templae->content->vari = '!!!!!!';
        $this->response->body($this->template);
    }

    public function action_save()
    {
        $idPost = $this->request->param('id');
        if (isset($_POST) && (!empty($_POST)))
        {
            $post = $this->validate($_POST);

            if ($post->check())
            {
                $posts = ORM::factory('posts')
                    ->where('id_post', '=', $idPost)
                    ->find();
                $posts->title = $post['title'];
                $posts->id_category = $post['categoryId'];
                $posts->textfield = $post['content'];
                 $posts->description = $post['description'];
                $tagIds = array();
                ORM::factory('posttags')->myDeleteAll($idPost);
                if(!empty($post['tags']))
                {
                    foreach($post['tags'] as $tag)
                    {
                        if(preg_match('/^exist_/',$tag))
                        {
                            $tagIds[] = preg_replace('/^exist_/', '',$tag);
                        }
                        else
                        {
                            $tagIds[] = ORM::factory('tags')->addNew($tag);
                        }
                    }
                }
                foreach($tagIds as $id)
                {
                    $postTags = ORM::factory('posttags');
                    $postTags->id_post = $idPost;
                    $postTags->id_tag = $id;
                    $postTags->save();
                }
                if ($posts->save())
                {
                    die(json_encode(array('msg' => 'ok')));
                }
            }
            else
            {
                die(json_encode(array('error' => $post->errors('validation'))));
            }
        }
    }

    private function validate($_POST)
    {
        $val = Validation::factory($_POST)->rule('title', 'not_empty')
            ->rule('content', 'not_empty')
            ->rule('categoryId', 'numeric')
            ->label('title', __('Заголовок'))
           ->label('content', __('Содержимое'))
            ->label('description', __('Описание'))
            ->label('tags', __('Теги'));
//        if (isset($post['url']))
//        {
//            $val->rule('url', 'not_empty')
//                ->label('url', __('URL'));
//        }
        return $val;
    }

}