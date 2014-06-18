<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta charset="utf-8" />
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="<?php echo URL::base() ?>css/style_ie_shadow.css" type="text/css"  />
        <![endif]-->
        <title></title>
        <meta name="keywords" content="поездки, горы, активный отдых, туризм" />
        <meta name="description" content="<?php echo $meta_description?>" />
        <link rel="stylesheet" href="<?php echo URL::base() ?>css/style.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo URL::base() ?>css/master.css" type="text/css"  />
        <!--[if lte IE 6]><link rel="stylesheet" href="<?php echo URL::base() ?>css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
        <script type="text/javascript">
            var baseurl = '<?php echo URL::base(true, true) ?>';
        </script>
        <script src="<?php echo URL::base(true, true) ?>js/jquery-1.8.0.min.js"></script>
        <script src="<?php echo URL::base(true, true) ?>js/ui/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script src="<?php echo URL::base(true, true) ?>js/accountScript.js"></script>
        <script src="<?php echo URL::base(true, true) ?>js/modernizr.custom.19773.js"></script>

        <link rel="stylesheet" href="<?php echo URL::base(true, true) ?>js/ui/css/custom-theme/jquery-ui-1.8.23.custom.css" type="text/css" />
        <!--<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript" charset="windows-1251"></script>-->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>

<script type="text/javascript">
  VK.init({apiId: 3150792, onlyWidgets: true});
</script>


<script type="text/javascript" src="http://vk.com/js/api/share.js?11" charset="windows-1251"></script>
    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="wrapper">
            <header id="header">
                <input type="text" placeholder="поиск" id="searchInpt">
                <img class="header_img" src="<?php echo URL::base(true, true) ?>images/header/header.jpg" >
                <h2 class="title_on_img">Ваш навигатор по отдыху в горах</h2>
                <nav>
                    <?php echo $menu ?>
                </nav>
            </header>


            <section id="middle">

                <div id="container">
                    <div id="content">
                        <div class="wrap">
                            <?php echo $content ?>
                        </div>
                    </div>
                </div>

                <aside id="sideLeft">
                    <div id="datepicker">
                    </div>
                    <ul class="left__nav">
                        <li>
                            <a href="<?php echo URL::base(true, true)?>news/">
                            Новости
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true)?>articles/">
                            Статьи
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL::base(true, true)?>gallery/">
                            Галерея
                            </a>
                        </li>
                    </ul>
                     <p class="cloudTags">
                        <?php echo ORM::factory('tags')->getCloud(30) ?>
                    </p>
                </aside>

            </section>

        </div>

        <footer id="footer">
            <div class="footer_center">
                <div class="float_footer">этот сайт тралялял 2012 &COPY;</div>
                <a class="float_footer" href="http://vk.com/club39765156">Мы вконтакте</a>
            </div>
            
        </footer>

    </body>
</html>