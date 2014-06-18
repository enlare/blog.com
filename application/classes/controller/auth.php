<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base {

    public function __construct($request) {

        parent::__construct($request);

        if (
                'admin' == Request::instance()->directory &&
                'index' != Request::instance()->controller
        ) {
            //Check admin autentification
            if (!AuthAdapter::isAdmin()) {
                Request::instance()->redirect(Route::get('admin')->uri(array('controller' => 'index', 'action' => '')));
            }
        }

        if (
                'admin' != Request::instance()->directory &&
                !AuthAdapter::logged()
        ) {
            Request::instance()->redirect(Route::get('account')->uri(array('controller' => 'login', 'action' => '')));
        }

        if (AuthAdapter::logged()) {

            if (Session::instance()->get('updateAuthAdapter', false)) {
                $user = ORM::factory('users')->where('id_user', '=', AuthAdapter::user()->id_user)->find();
                Session::instance()->delete('updateAuthAdapter');
            }
            if (AuthAdapter::user()->status == 'disabled') {
                if (Request::instance()->controller != 'login') {
                    Request::instance()->redirect(Route::get('account')->uri(array('controller' => 'login', 'action' => '')));
                }
            }
        }
    }

}

// End Welcome
