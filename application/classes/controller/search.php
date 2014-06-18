<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Base
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {
        $content = View::factory('scripts/search/search');
        $this->template->content = $content;
        $this->template->content->errors = '';

        $keyword = strip_tags(Arr::get($_REQUEST, 'f', ''));
        $categories = ORM::factory('categories')
                ->where_open()
                ->where('url', '=', 'events')
                ->or_where('url', '=', 'news')
                ->or_where('url', '=', 'articles')
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
                ->where(strip_tags('textfield'), 'like', '%' . $keyword . '%')
                ->or_where(strip_tags('title'), 'like', '%' . $keyword . '%')
                ->where_close()
                ->find_all();

        $this->template->content->searchRes = $searchRes;
        $this->template->content->searchwords = $keyword;
    }

}
