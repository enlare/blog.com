<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Controller_Base
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {
        $content = View::factory('scripts/tags');
        $this->template->content = $content;

        $tag = $this->request->param('tag');
        $cat = ORM::factory('categories')
                ->where_open()
                ->where('url', '=', 'events')
                ->or_where('url', '=', 'news')
                ->or_where('url', '=', 'articles')
                ->where_close()
                ->find_all();
//var_dump($this->request->param());
//die();
        $ids = array();
        foreach ($cat as $value)
        {
            $ids[] = $value->id_category;
        }

        $tagId = ORM::factory('tags')->where('title', '=', $tag)->find();
        if (!$tagId->pk())
        {
            Request::current()->redirect(Route::get('default')->uri());
        }
        else
        {


//var_dump($tagId->pk());
//die();
            $articles = ORM::factory('posts')
                    ->select(DB::expr('categories.is_comment as iscomment'))
                    ->where('posts.id_category', 'IN', $ids)
                    ->where('post_tags.id_tag', '=', DB::expr($tagId->pk()))
                    ->join('categories', 'left')
                    ->on('posts.id_category', '=', 'categories.id_category')
                    ->join('post_tags', 'left')
                    ->on('posts.id_post', '=', 'post_tags.id_post')
                    ->on('post_tags.id_tag', '=', DB::expr($tagId->pk()))
                    ->group_by('posts.id_post')
                    ->limit(5)
                    ->offset(0)
                    ->order_by('datetime', 'DESC')
                    ->find_all();

            $tags = array();
            foreach ($articles as $item)
            {
                $tags[$item->id_post] = ORM::factory('posttags')->getTags($item->id_post);
            }
        }
//        $this->template->meta_description =  'а';
        $this->template->content->tags = $tags;
        $this->template->content->posts = $articles;
        $this->template->content->category = '';
        $this->template->content->nopagination = true;
    }

}