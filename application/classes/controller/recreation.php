<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Recreation extends Controller_Base {

    public function action_index() {
    
            $cat = ORM::factory('categories')
                ->where('title', '=', 'активный отдых')
                ->find();
        if ($this->request->param('id') == '')
        {
            $content = View::factory('scripts/article/article');
            $this->template->content = $content;

           
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

            $this->template->content->posts = $articles;
            $this->template->content->category = $cat->title;
        }
        else
        {
            $content = View::factory('scripts/article/onearticle');
            $this->template->content = $content;
          
            
            $oneArticle = ORM::factory('posts')
                ->where('posts.id_category', '=', $cat->id_category)
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                ->group_by('posts.id_post')
                ->find();
            
            $comments = ORM::factory('comments')
                ->where('id_post', '=', $oneArticle->id_post)
                ->order_by('datetime', 'DESC')
                ->limit(5)
                ->offset(0)
                ->find_all();
                
        $captcha = Captcha::instance();

        $this->template->content->captcha = $captcha;
            $this->template->content->oneArticle = $oneArticle;
            $this->template->content->comments = $comments;
            $this->template->content->cat = $cat;
        }
        
        
        
    }

}