<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Categories extends ORM
{

    protected $_table_name = 'categories';
    protected $_primary_key = 'id_category';

    static function urlunique($value, $validation, $field)
    {

        $posts = ORM::factory('posts')
            ->where_open()
            ->where('full__url', '=', urlencode($value))
            ->where_close()
            ->count_all();
        $cats = ORM::factory('categories')
            ->where('url', '=', urlencode($value))
            ->count_all();


        if ($posts || $cats)
        {
            $validation->error('catTitle', 'not_unique');
        }
        else
        {
            return true;
        }
    }

    function translitIt($str)
    {
        $tr = array(
            "А" => "A", "Б" => "B", "В" => "V", "Г" => "G",
            "Д" => "D", "Е" => "E", "Ж" => "J", "З" => "Z", "И" => "I",
            "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N",
            "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T",
            "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "TS", "Ч" => "CH",
            "Ш" => "SH", "Щ" => "SCH", "Ъ" => "", "Ы" => "YI", "Ь" => "",
            "Э" => "E", "Ю" => "YU", "Я" => "YA", "а" => "a", "б" => "b",
            "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "j",
            "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
            "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "y",
            "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
            "ё" => "e", ";" => "", ":" => "",
            "a" => "a", "b" => "b", "c" => "c", "d" => "d", "e" => "e", "f" => "f", "j" => "j",
            "k" => "k", "l" => "l", "m" => "m", "n" => "n", "o" => "o", "p" => "p", "q" => "q",
            "s" => "s", "t" => "t", "u" => "u", "v" => "v", "w" => "w", "x" => "x", "y" => "y",
            "z" => "z"
        );
        return strtr($str, $tr);
    }

}
