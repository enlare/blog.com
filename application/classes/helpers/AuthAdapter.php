<?php defined('SYSPATH') or die('No direct script access.');


class AuthAdapter
{

   private static $user = null;

   private static $admin = null;

   private function  __construct() {}

   public static function init()
   {
      self::$user  = Session::instance()->get('authorized_user');
      self::$admin = Session::instance()->get('authorized_admin');
   }

   public static function logged()
   {
      return (self::$user) ? true : false;
   }
   
   public static function update($name, $value)
   {
      self::$user->$name = $value;
      Session::instance()->set('authorized_user', self::$user);
   }

   public static function isAdmin()
   {
      return (self::$admin) ? true : false;
   }

   public static function authorizeAdmin( $password )
   {
      $config = Kohana::$config->load('general');
      if( $config->admin_password === md5($password) )
      {
         Session::instance()->set('authorized_admin', true);
         return true;
      }
      return false;
   }

   public static function user()
   {
      return self::$user;
   }
   
   public static function admin()
   {
      return self::$admin;
   }

   public static function authorize( $username, $password )
   {
      
      try
      {
         if( !(self::$user = ORM::factory('users')->authorize($username, $password)) )
         {
            return false;
         }
         
         Session::instance()->set('authorized_user', self::$user);
         
         return true;
      }
      catch( Exception $ex )
      {
         return false;
      }
      
   }

   public static function authorizeByCookie( $cookie )
   {

      try
      {
         if( !(self::$user = ORM::factory('users')->authorizeByCookie($cookie)) )
         {
            return false;
         }

         Session::instance()->set('authorized_user', self::$user);

         return true;
      }
      catch( Exception $ex )
      {
         return false;
      }

   }

}