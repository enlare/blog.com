<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Reviews extends Controller_Base
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {
        $content = View::factory('scripts/review');

        $review = ORM::factory('review')
                ->where('status', '=', 'approved')
                ->order_by('datetime')
                ->limit(20)
                ->offset(0)
                ->find_all();

        $this->template->content = $content;
        $this->template->content->reviews = $review;
    }

    public function action_addreview()
    {
        if (isset($_POST))
        {
            $post = $this->validate($_POST);

            if ($post->check())
            {
                $rev = ORM::factory('review');
                $rev->datetime = strtotime('now');
                $rev->text = $post['rev_text'];
                $rev->email_from = $post['rev_email'];
                if ($rev->save())
                {
                    $config = Kohana::$config->load('email');
                    $configGeneral = Kohana::$config->load('general');
                    Email::connect($config);

                    $to = $configGeneral->admin_email;
                    $subject = htmlspecialchars('Новый отзыв от ' . $post['rev_email']);
                    $from = $post['rev_email'];
                    $message = htmlspecialchars($post['rev_text']);

                    Email::send($to, $from, $subject, $message, $html = false);
                    die(json_encode(array('err' => '', 'msg' => 'Ваш отзыв будет добавлен после подтверждения администратором')));
                }
            }
            else
            {
                die(json_encode(array('err' => $post->errors('validation'))));
            }
        }
    }

    private function validate($_POST)
    {
        $val = Validation::factory($_POST)
                ->rule('rev_email', 'not_empty');
        if (!empty($_POST['rev_email']))
        {
            $val->rule('rev_email', 'email');
        }

        $val->rule('rev_text', 'not_empty')
                ->rule('rev_text', 'max_length', array('rev_text', 250))
                ->label('rev_email', __('Email'))
                ->label('rev_text', __('текст отзыва'));
        return $val;
    }

}