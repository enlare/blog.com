<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{

    public $template = 'layouts/common';
    public $auto_render = FALSE;
    protected $previewWidth = 200;
    protected $previewHeight = 200;
    protected $countItemInRowGallery = 4;

    public function action_index()
    {
        
    }

    public function action_getcontent()
    {

        $content = View::factory('scripts/article/getarticle');

        $offset = $this->request->param('id');
        $cat = ORM::factory('categories')
                ->where('title', '=', $_POST['category'])
                ->find();

        $articlesGet = ORM::factory('posts')
                ->select(DB::expr('categories.is_comment as iscomment'))
                ->where('posts.id_category', '=', $cat->id_category)
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                ->group_by('posts.id_post')
                ->limit(5)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->find_all();
        $tags = array();
        foreach ($articlesGet as $item)
        {
            $tags[$item->id_post] = ORM::factory('posttags')->getTags($item->id_post);
        }

        $content->articlesGet = $articlesGet;
        $content->tags = $tags;
        echo $content;
    }

    public function action_getposts()
    {
        $content = View::factory('scripts/admin/manage/getpost');
        $offset = $this->request->param('id');
        $postsGet = ORM::factory('posts')
                ->limit(15)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->find_all();
        $content->postsGet = $postsGet;
        echo $content;
    }
     public function action_getvideo()
    {
        if (isset($_POST['to_main']) && ($_POST['to_main'] == 'yes'))
        {
            $content = View::factory('scripts/getvideotomain');
        }
        else
        {
            $content = View::factory('scripts/admin/manage/getvideo');
        }
        
        $offset = $this->request->param('id');
        $videoGet = ORM::factory('videos')
                ->order_by('datetime','DESC')
                ->limit(5)
                ->offset($offset)
                ->find_all();
        $content->videoGet = $videoGet;
        echo $content;
    }

    public function action_getevent()
    {

        $content = View::factory('scripts/article/getevent');

        $offset = $this->request->param('id');
        $cat = ORM::factory('categories')
                ->where('title', '=', 'события')
                ->find();

        $allEventGet = ORM::factory('posts')
                ->select(DB::expr('categories.is_comment as iscomment'))
                ->where('posts.id_category', '=', $cat->id_category)
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                ->group_by('posts.id_post')
                ->limit(5)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->find_all();

        $content->allEventGet = $allEventGet;
        echo $content;
    }

    public function action_geteventbydate()
    {

        $content = View::factory('scripts/article/geteventbydate');

        $offset = $this->request->param('id');
        $cat = ORM::factory('categories')
                ->where('title', '=', 'события')
                ->find();

        $eventsBeDate = ORM::factory('posts')
                ->select(DB::expr('categories.is_comment as iscomment'))
                ->where('posts.id_category', '=', $cat->id_category)
                ->where('posts.datetime', '=', strtotime($_POST['date']))
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                ->group_by('posts.id_post')
                ->limit(5)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->find_all();

        $content->allEventGet = $eventsBeDate;
        echo $content;
    }

    public function action_searchres()
    {
                $categories = ORM::factory('categories')
                ->where_open()
                ->where('url','=','events')
                ->or_where('url','=','news')
                ->or_where('url','=','articles')
                ->where_close()
                ->find_all();

        $ids = array();
        foreach ($categories as $value)
        {
            $ids[] = $value->id_category;
        }
        
        $searchRes = ORM::factory('posts')
                 ->where('id_category', 'IN', $ids)
                ->where_open()
                ->where(strip_tags('textfield'), 'like', '%' . $_POST['keyword'] . '%')
                ->or_where(strip_tags('title'), 'like', '%' . $_POST['keyword'] . '%')
                ->where_close()
                ->find_all();
        
        $this->template->content->searchRes = $searchRes;
        $this->template->content->searchwords = $_POST['keyword'];
        echo $content;
    }

    public function action_getreview()
    {

        $content = View::factory('scripts/admin/manage/getReview');

        $offset = $this->request->param('id');
     
            $all = ORM::factory('review')
            ->order_by('datetime', 'DESC')
                 ->limit(15)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->order_by('status', 'ASC')
            ->find_all();
    
        $content->allreviews = $all;
        echo $content;
    }
     public function action_getreviewtomain()
    {

        $content = View::factory('scripts/getReviewToMain');

        $offset = $this->request->param('id');
     
            $all = ORM::factory('review')
                    ->where('status','=','approved')
            ->order_by('datetime', 'DESC')
                 ->limit(15)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->order_by('status', 'ASC')
            ->find_all();
    
        $content->allreviews = $all;
        echo $content;
    }

    public function action_uploadimage()
    { 
        $targetFolder = Kohana::$config->load('general')->upload_directory;

        if (!empty($_FILES))
        {
            $tempFile = $_FILES['Filedata']['tmp_name'];

            $targetPath = DOCROOT . $targetFolder;
            $imageName = date('Y-m-d').'_'.$_FILES['Filedata']['name'];
            $targetFile = $targetPath . $imageName;


            // Validate the file type
            $fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array(strtolower($fileParts['extension']), $fileTypes))
            {
                move_uploaded_file($tempFile, $targetFile);

                if (!file_exists(DOCROOT . Kohana::$config->load('general')->upload_directory . $imageName))
                {
                    die;
                }
                $image = Image::factory(DOCROOT . Kohana::$config->load('general')->upload_directory . $imageName);
                $size = getimagesize(DOCROOT . Kohana::$config->load('general')->upload_directory . $imageName);
                if ($size[0] > $this->previewWidth || $size[1] > $this->previewHeight)
                {
                    $image = $image->resize($this->previewWidth, $this->previewHeight, IMAGE::AUTO);
                }
                $image->save(DOCROOT . Kohana::$config->load('general')->upload_directory_preview . $imageName);
                echo $targetFolder . '/' . $imageName;
            }
            else
            {
                echo 'Invalid file type.';
            }
        }
    }
public  function action_uploadheaderimage()
    {
        if (!empty($_FILES))
        {
            $targetFolder = 'images/header/';
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = DOCROOT . $targetFolder;
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            $targetFile = $targetPath . 'tmp.jpg';
            $imageName = 'tmp.jpg';

            // Validate the file type
            $fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // File extensions


            if (in_array(strtolower($fileParts['extension']), $fileTypes))
            {
                move_uploaded_file($tempFile, $targetFile);

                if (!file_exists(DOCROOT . $targetFolder . $imageName))
                {
                    die;
                }
                //$image = Image::factory(DOCROOT . Kohana::$config->load('general')->upload_directory . $imageName);
                //$size = getimagesize(DOCROOT . Kohana::$config->load('general')->upload_directory . $imageName);
                //if ($size[0] > $this->previewWidth || $size[1] > $this->previewHeight)
                //{
                  //  $image = $image->resize($this->previewWidth, $this->previewHeight, IMAGE::AUTO);
                //}
                //$image->save(DOCROOT . Kohana::$config->load('general')->upload_directory_preview . $imageName);
                echo $targetFolder  . $imageName;
            }
            else
            {
                echo 'Invalid file type.';
            }
        }
    }

    public function action_getgallery()
    {
        $content = View::factory('scripts/gallery');
        $images = scandir(DOCROOT . Kohana::$config->load('general')->upload_directory);
        foreach ($images as $key => $image)
        {
            if (is_dir($image) || $image == 'preview')
            {
                unset($images[$key]);
            }
        }
        $content->images = $images;
        $content->inRow = $this->countItemInRowGallery;
        $content->showclose = false;
        $content->uploadPathPreview = URL::base(true, true) . Kohana::$config->load('general')->upload_directory_preview;
        if (isset($_POST['from_admin']) && !empty($_POST['from_admin'])) //Если запрошено из админки
        {
            $content->showclose = true;
        }
        echo $content->render();
        die;
    }
    

    

    public function action_removephoto()
    {
        if (!empty($_POST['filename']) && !empty($_POST['from_admin']) && $_POST['from_admin'] == '1')
        {
            if (file_exists(DOCROOT . Kohana::$config->load('general')->upload_directory . $_POST['filename']) &&
                    file_exists(DOCROOT . Kohana::$config->load('general')->upload_directory_preview . $_POST['filename']))
            {
                if (@unlink(DOCROOT . Kohana::$config->load('general')->upload_directory . $_POST['filename']) &&
                        @unlink(DOCROOT . Kohana::$config->load('general')->upload_directory_preview . $_POST['filename']))
                {
                    die(json_encode(array('success' => 'success')));
                }
            }
        }
        die(json_encode(array('error' => 'error')));
    }

    public function action_gettags()
    {
        $tags = ORM::factory('tags')->find_all();
        $result = array();
        foreach ($tags as $tag)
        {
            $tmp = array();
            $tmp['key'] = 'exist_' . $tag->id_tag;
            $tmp['value'] = $tag->title;
            $result[] = $tmp;
        }
        die(json_encode($result));
    }
    
    
    public function action_getbytag()
    {

        $content = View::factory('scripts/article/getarticle');

        $offset = $this->request->param('id');
        $cat = ORM::factory('categories')
                ->where('title', '=', $_POST['category'])
                ->find();

        $articlesGet = ORM::factory('posts')
                ->select(DB::expr('categories.is_comment as iscomment'))
                ->where('posts.id_category', '=', $cat->id_category)
                ->where('post_tags','=',$_POST['tag'])
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                 ->join('post_tags', 'left')
                ->on('posts.id_post', '=', 'post_tags.id_post')
//                ->on('post_tags.id_tag', '=', DB::expr($tagId->pk()))
                ->group_by('posts.id_post')
                ->limit(5)
                ->offset($offset)
                ->order_by('datetime', 'DESC')
                ->find_all();
        $tags = array();
        foreach ($articlesGet as $item)
        {
            $tags[$item->id_post] = ORM::factory('posttags')->getTags($item->id_post);
        }

        $content->articlesGet = $articlesGet;
        $content->tags = $tags;
        echo $content;
    }

}