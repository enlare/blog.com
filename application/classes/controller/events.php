<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Events extends Controller_Base
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {

        

        $month = Request::current()->param('month');
        $day = Request::current()->param('day');
        $year = Request::current()->param('year');
        $datetime = strtotime($month . '/' . $day . '/' . $year);
        $title = Request::current()->param('title');

        if (!empty($month) && !empty($day) && !empty($year))
        {
            $cat = ORM::factory('categories')
                ->where('title', '=', 'события')
                ->find();
            if (empty($title))
            {


                $content = View::factory('scripts/events/eventsondate');
                $this->template->content = $content;


                $eventsByDate = ORM::factory('posts')
                    ->select(DB::expr('categories.is_comment as iscomment'))
                    ->where('posts.id_category', '=', $cat->id_category)
                    ->where('posts.datetime', '=', $datetime)
                    ->join('categories', 'left')
                    ->on('posts.id_category', '=', 'categories.id_category')
                    ->group_by('posts.id_post')
                    ->limit(5)
                    ->offset(0)
                    ->order_by('datetime', 'DESC')
                    ->find_all();
//            var_dump($eventsByDate);
//            echo urlencode('rostov-on-don');
//            die();
                $this->template->content->date_url = $datetime;
                $this->template->content->eventsByDate = $eventsByDate;
            }
            else
            {
                $content = View::factory('scripts/events/oneevent');
                $this->template->content = $content;

                $oneEvent = ORM::factory('posts')
                    ->where('posts.id_category', '=', $cat->id_category)
                    ->join('categories', 'left')
                    ->on('posts.id_category', '=', 'categories.id_category')
                    ->group_by('posts.id_post')
                    ->find();

                $comments = ORM::factory('comments')
                    ->where('id_post', '=', $oneEvent->id_post)
                    ->order_by('datetime', 'DESC')
                    ->limit(5)
                    ->offset(0)
                    ->find_all();

                $captcha = Captcha::instance();

                $this->template->content->captcha = $captcha;
                $this->template->content->oneEvent = $oneEvent;
                $this->template->content->comments = $comments;
                $this->template->content->cat = $cat;
            }
        }
        else
        {
            $content = View::factory('scripts/events/allevent');
            $this->template->content = $content;
            $cat = ORM::factory('categories')
                ->where('title', '=', 'события')
                ->find();

            $events = ORM::factory('posts')
                ->select(DB::expr('categories.is_comment as iscomment'))
                ->where('posts.id_category', '=', $cat->id_category)
//                ->where('posts.datetime', '=', $datetime)
                ->join('categories', 'left')
                ->on('posts.id_category', '=', 'categories.id_category')
                ->group_by('posts.id_post')
                ->limit(5)
                ->offset(0)
                ->order_by('datetime', 'DESC')
                ->find_all();
            $this->template->content->events = $events;
        }


        
    }

    public function action_getevent()
    {
        $cat = ORM::factory('categories')
            ->where('title', '=', 'события')
            ->find();
        $events = ORM::factory('posts')
            ->where('id_category', '=', $cat->id_category)
            ->find_all();
        $res = array();
        if (count($events->as_array()) != 0)
        {
            foreach ($events as $key => $value)
            {
                $res[$key]['title'] = $value->title;
                $res[$key]['id'] = $value->id_post;
//                var_dump(strtotime('09/24/2012'));
//                var_dump($value->datetime);
//                var_dump(date('m/d/Y') , '1348439873');
//                die();
                $res[$key]['date'] = date('d/m/Y', $value->datetime);
            }
            die(json_encode(array('event' => $res)));
        }
        else
        {
            die(json_encode(array('event' => '')));
        }
    }

}