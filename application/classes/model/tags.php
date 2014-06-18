<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Tags extends ORM
{

   protected $_table_name = 'tags';
   protected $_primary_key = 'id_tag';

    public function  addNew($title)
    {
        $obj = $this->where('title','=', $title)->find();
        if($obj->pk())
        {
            return $obj->pk();
        }
        else
        {
            $this->clear();
            $obj = $this;
            $obj->title = $title;
            if($obj->save())
            {
                return $obj->pk();
            }
        }

    }

    function getCloud($count)
    {
        $sql = "SELECT * FROM   (SELECT tags.title AS title,
                                COUNT(post_tags.id_post_tag) AS cnt
                FROM   tags
                       INNER JOIN post_tags
                         ON ( post_tags.id_tag = tags.id_tag )
                GROUP  BY tags.id_tag
                ORDER  BY cnt DESC
                LIMIT  $count) AS subq
        ORDER  BY title";
        $res = DB::query(Database::SELECT, $sql)->execute();
        $minFontSize = '12';
        $maxFontSize = '32';
        $minCnt = 999999;
        $maxCnt = 0;
        foreach($res as $tag)
        {
            $minCnt = min($minCnt, $tag['cnt']);
            $maxCnt = max($maxCnt, $tag['cnt']);
        }
        $cloud = array();

        foreach ($res as $tag)
        {
            $tagsarr[] = sprintf('<a style="font-size: %dpx;" class="link_tags"  href="'.URL::base(true, true).Route::get('tag')->uri(array('tag'=>'%s')).'">%s</a>',
                                 $minCnt == $maxCnt ? $minFontSize : ( ($tag['cnt'] - $minCnt) / ($maxCnt - $minCnt) * ($maxFontSize - $minFontSize) + $minFontSize ),
                                 $tag['title'],
                                 $tag['title'],
                                 $tag['title']
                         );
        }
        echo implode(' ', $tagsarr);


    }




}
