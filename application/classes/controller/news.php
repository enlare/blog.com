<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Base
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {

        if ($this->request->param('id') == '')
        {
            $content = View::factory('scripts/article/article');
            $this->template->content = $content;

            $cat = ORM::factory('categories')
                    ->where('title', '=', 'новости')
                    ->find();
            $articles = ORM::factory('posts')
                    ->select(DB::expr('categories.is_comment as iscomment'))
                    ->where('posts.id_category', '=', $cat->id_category)
                    ->join('categories', 'left')
                    ->on('posts.id_category', '=', 'categories.id_category')
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
            $this->template->content->tags = $tags;
            $this->template->content->posts = $articles;
            $this->template->content->category = $cat->title;
        }
        else
        {
            $content = View::factory('scripts/article/onearticle');
            $this->template->content = $content;

            $cat = ORM::factory('categories')
                    ->where('title', '=', 'новости')
                    ->find();

            $oneArticle = ORM::factory('posts')
                    ->select(DB::expr('categories.is_comment as iscomment'))
                    ->where('posts.id_category', '=', $cat->id_category)
                    ->join('categories', 'left')
                    ->on('posts.id_category', '=', 'categories.id_category')
                    ->join('post_tags', 'left')
                    ->on('posts.id_post', '=', 'post_tags.id_post')
                    ->group_by('posts.id_post')
                    ->find();
            $tags = array();
            foreach ($oneArticle as $item)
            {
                $tags[$item->id_post] = ORM::factory('posttags')->getTags($item->id_post);
            }
            $this->template->content->tags = $tags;
//            $cap?tcha = Captcha::instance();
//            $this->template->content->captcha = $captcha;
            $this->template->content->oneArticle = $oneArticle;
            $this->template->content->cat = $cat;
            $this->template->content->nopagination = true;
        }
    }

}