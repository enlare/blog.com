<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {

    public function action_index() {
        /* выводим посты главной и 2 последние новости */
        $content = View::factory('scripts/main');
        $catMain = ORM::factory('categories')
                ->where('title', '=', 'главная')
                ->find();
        $posts = ORM::factory('posts')
                ->where('id_category', '=', $catMain->pk())
                ->find_all();
        $catNews = ORM::factory('categories')
                ->where('title', '=', 'новости')
                ->find();
        $latestNew = ORM::factory('posts')
                ->where('id_category', '=', $catNews->pk())
                ->order_by('datetime', 'DESC')
                ->limit(2)
                ->find_all();
        $content->main = $posts;
        $content->latestNew = $latestNew;
        $this->template->content = $content;
    }

}

