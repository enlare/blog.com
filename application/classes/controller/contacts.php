<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Base {

    public function action_index() {
        $content = View::factory('scripts/contacts');
        $this->template->content = $content;
        $this->template->content->errors = '';
        $cat = ORM::factory('categories')
                ->where('title', '=', 'контакты')
                ->find();
        $contactInfo = ORM::factory('posts')
                ->where('id_category', '=', $cat->pk())
                ->find();

        if (isset($_POST) && (!empty($_POST))) {
            $post = $this->validate($_POST);
            if ($post->check() && Captcha::valid($_POST['captcha'])) {

                $config = Kohana::$config->load('email');
                $configGeneral = Kohana::$config->load('general');
                Email::connect($config);

                $to = $configGeneral->admin_email;
                $subject = htmlspecialchars($post['messageTitle']);
                $from = $post['emailSender'];
                $message = $post['messageText'];

                Email::send($to, $from, $subject, $message, $html = false);
            } else {
                $errors = $post->errors('validation');
                $this->template->content->errors = $errors;
            }
        }

        $captcha = Captcha::instance();
        $this->template->content->captcha = $captcha;
        $this->template->content->contactInfo = $contactInfo;
    }

    private function validate($_POST) {
        $val = Validation::factory($_POST)
//            ->rule('nameSender', 'not_empty')
                ->rule('emailSender', 'not_empty')
                ->rule('messageTitle', 'not_empty')
                ->rule('messageText', 'not_empty')
                ->rule('captcha', 'not_empty')
//            ->label('nameSender', __('имя'))
                ->label('emailSender', __('email'))
                ->label('messageTitle', __('тема'))
                ->label('messageText', __('текст сообщения'))
                ->label('captcha', __('капча'));
        return $val;
    }

    public static function captcha_check($value) {
        if (!Captcha::valid($value))
            return FALSE;
    }

}