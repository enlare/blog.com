<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $page_title = '';
    public $sub_title = '';
    public $template = 'layouts/common';
    public $auto_render = TRUE;
//    public $meta_title = 'поездки,горы';
    public $meta_description = '';
            

    public function before() {
        parent::before();
        $this->template->menu = View::factory('scripts/menu');
        $this->template->meta_description = 'поездки в горы, туризм, активный отдых';
        $existMenus = ORM::factory('menus')
                ->where('id_parent', '=', 0)
                ->order_by('position', 'ASC')
                ->find_all();

        // $submenu
        $menu = array();
        foreach ($existMenus as $key => $value) {
            $sub = ORM::factory('menus')
                    ->where('id_parent', '=', $value->id_menu)
                    ->find_all();
            $menu[] = array(
                'main' => $value,
                'sub' => !empty($sub) ? $sub : ''
            );
        }
        $this->template->menu->menu = $menu;
    }

    public function display_ajax($view) {
        $this->auto_render = false;
        echo $view;
    }

}
