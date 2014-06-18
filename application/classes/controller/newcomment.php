<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Newcomment extends Controller
{

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index()
    {
//        die('sss');
        if (isset($_POST) && (!empty($_POST)))
        {
            $post = $this->validate($_POST);
//            var_dump(Captcha::valid($_POST['captcha_com']));
            if ($post->check() && Captcha::valid($post['captcha_com']))
            {
//                echo '333';
                $captcha = Captcha::instance();
                $comment = ORM::factory('comments');
                $comment->id_post = $post['postId'];
                $comment->textfield = htmlspecialchars($post['comment']);
                $comment->login = htmlspecialchars($post['commentator']);
                $comment->datetime = time();
                if ($comment->save())
                {
//                    die('ddd');
                    $newComment = ORM::factory('comments')
                        ->where('id_comment', '=', $comment->pk())
                        ->find();
//                    echo $comment->pk();
//                    die();
                    $res = array('commentator' => $newComment->login,
                        'datetime'    => date('d/m/Y H:i', $newComment->datetime),
                        'comment'     => $newComment->textfield,
                        'id_comment' =>$newComment->pk(),
                        'parent_id'=>$newComment->parent_id
                    );
//                    die('sss');
                    die(json_encode(array(
                            'error' => '',
                            'res'   => $res
                        )));
                }
            }
            else
            {
                die(json_encode(array('error' => $post->errors('validation'))));
            }
        }
    }

    public function validate($_POST)
    {
        $val = Validation::factory($_POST);

        $val->rule('captcha_com', 'not_empty')
            ->label('captcha_com', __('капча'))
            ->rule('comment', 'not_empty')
            ->label('comment', __('комментарий'))
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->label('email', __('email'))
            ->rule('commentator', 'not_empty')
            ->label('commentator', __('имя'))
            ->rule('postId', 'numeric');
//                ->label('captcha_com', __('капча'));

        return $val;
    }
    public static function captcha_check($value)
    {
        if (!Captcha::valid($value))
            return FALSE;
    }

}