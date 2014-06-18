<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Posttags extends ORM
{

   protected $_table_name = 'post_tags';
   protected $_primary_key = 'id_post_tag';

   public  function myDeleteAll($idPost)
   {
       DB::query(Database::DELETE, 'DELETE FROM `post_tags` where id_post='.$idPost)->execute();
   }

    public  function  getTags($idPost)
    {
        $postTags = $this->select('tags.title')->join('tags')->on('posttags.id_tag','=','tags.id_tag')
                                            ->where('id_post','=', $idPost)->find_all();
        $result = array();
        foreach($postTags as $item)
        {
            $result[] = $item->title;
        }
        return $result;
    }


}
