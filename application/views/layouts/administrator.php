<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title><?php echo __('Administrator section') ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!--[if lte IE 6]><link rel="stylesheet" href="style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
        <link rel="stylesheet" href="<?php echo URL::base(true, true); ?>css/adminStyle.css" type="text/css" media="screen, projection" />
        <!--<link rel="stylesheet" href="<?php echo URL::base(true, true); ?>css/style.css" type="text/css" media="screen, projection" />-->
        <script type="text/javascript">
            var baseurl = '<?php echo URL::base(true, true) ?>';
        </script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="<?php echo URL::base(true, true) ?>js/jquery-1.8.0.min.js"></script>
        <script src="<?php echo URL::base(true, true) ?>js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo URL::base(true, true) ?>js/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo URL::base(true, true) ?>js/ui/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>
        
        <script src="<?php echo URL::base(true, true) ?>js/fcbk/jquery.fcbkcomplete.min.js"></script>

        <link rel="stylesheet" href="<?php echo URL::base(true, true); ?>js/ckeditor/contents.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo URL::base(true, true); ?>js/ui/css/start/jquery-ui-1.8.23.custom.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(true, true); ?>js/uploadify/uploadify.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(true, true); ?>js/lightbox/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(true, true); ?>js/fcbk/style.css" media="screen" />
        <!--<script src="../ui/jquery.ui.datepicker.js"></script>-->
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(true, true); ?>js/jcrop/css/jquery.Jcrop.min.css" media="screen" />
    </head>
    <body>

        <div class="admin__wrapper">
            <header class="adminHeader">
                <div id="menu">
                    <ul class="adminNav">
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/post/' ?>">Записи</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/reviews/'; ?>">Отзывы</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/category/'; ?>">Категории</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/menu/'; ?>">Меню</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/comments/'; ?>">Комментарии</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/gallery/'; ?>">Фото</a>
                        </li>
                         <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/photo/'; ?>">Фото на главной</a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true) . 'admin/video/'; ?>">Видео</a>
                        </li>
                    </ul>
                </div>


            </header>
            <section class="adminContainer">
                <?php echo $content ?>
            </section>
        </div>
        <script src="<?php echo URL::base(true, true) ?>js/adminScript.js"></script>
    </body>
</html>