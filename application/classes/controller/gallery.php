 
<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Gallery extends Controller_Base {

    public $template = 'layouts/common';
    public $auto_render = TRUE;

    public function action_index() {
        $view = View::factory('scripts/photo');

//phpinfo() ;

        $this->template->content = $view;

        $this->response->body($this->template);
    }

}