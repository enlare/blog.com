<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Image extends Controller
{
    protected $previewWidth = 200;
    protected $previewHeight = 200;

    protected $fullWidth = 900;
    protected $fullHeight = 900;

    protected  $watermarkPath = '/images/wm.png';


//    public function before()
//    {
//        parent::before();
//    }
//    public function __construct()
//    {
//        parent::__construct();
//        
//    }
//    public function after()
//    {
//        
//    }
    
//    public function action_index()
//    {
//        $imageName = base64_encode($this->request->param('img'));
//        //var_dump($imageName); die;
//        $image = Image::factory('/var/www/public_html/travel.com/upload/' . $imageName, 'GD');
//        echo $image->render('jpeg');
//    }

    public function  action_full()
    {
        $imageName = $this->request->param('img');
        if(!file_exists(DOCROOT.Kohana::$config->load('general')->upload_directory.$imageName))
        {
            die;
        }

        $info = pathinfo($imageName);
        $contentType = 'image/jpg';
        switch($info['extension'])
        {
            case 'gif': $contentType = 'image/gif';
                        break;
            case 'png': $contentType = 'image/png';
                        break;
        }
        $this->response->headers('Content-Type', $contentType);
        $image = Image::factory(DOCROOT.Kohana::$config->load('general')->upload_directory.$imageName);
        $watermark = Image::factory(DOCROOT.$this->watermarkPath);
        $size = getimagesize(DOCROOT.Kohana::$config->load('general')->upload_directory.$imageName);
        if($size[0]> $this->fullWidth || $size[1]>$this->fullHeight)
        {
            $image = $image->resize($this->fullWidth, $this->fullHeight, IMAGE::AUTO);
        }
        $this->response->body($image->watermark($watermark, $image->width - $watermark->width, $image->height  - $watermark->height)->render());
    }


    public  function action_cropheader()
    {
        if(!empty($_POST))
        {
            $params = $_POST['params'];
            $image = Image::factory(DOCROOT . '/images/header/' . 'tmp.jpg');
            $image = $image->resize('1000');
            $image = $image->crop($params['width'], $params['height'],$params['x'], $params['y']);
            $image = $image->resize('1000');
            $watermark = Image::factory(DOCROOT.'/images/logo_wm3.png');
//            $watermark = Image::factory(DOCROOT.$this->watermarkPath);
            $image = $image->watermark($watermark,0, 100);
            if($image->save(DOCROOT . '/images/header/' . 'header.jpg'))
            {
                die(json_encode(array('success'=>'success')));
            }

        }
    }

}