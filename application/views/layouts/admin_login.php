<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title><?php echo __('Administrator section') ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="<?php echo URL::base(true, true); ?>css/adminStyle.css" type="text/css" media="screen, projection" />
        <script type="text/javascript">
            var baseurl = '<?php echo URL::base(true, true) ?>';
        </script>
        <link rel="stylesheet" href="<?php echo URL::base(true, true); ?>js/ui/css/start/jquery-ui-1.8.23.custom.css" type="text/css"/>
    </head>
    <body>

                <?php echo $content ?>
    </body>
</html>
