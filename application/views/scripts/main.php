

<?php
if (!empty($main)) {
    ?>
<div class="news articles__wrapper">
    <div class="header_gradient">
        Добро пожаловать на наш сайт!
    </div>
    <?php foreach ($main as $value) {
        ?>  
       <p> <h3><?php echo $value->title ?></h3></p>
        <?php echo $value->textfield ?>
    <?php }
    ?>
</div>
<?php } ?>



    <div class="header_gradient">
        Последние новости!
    </div>
    <?php
    if (count($latestNew) != 0) {
        ?>

        <?php
        foreach ($latestNew as $key => $value) {
            ?> 
            <div class = "news_cell">
                <span class="news__date">
                    <?php echo date('d/m/Y', $value->datetime) ?>
                </span>
                <p>
                    <a class="post_header_href" href="<?php echo URL::base(true, true).$value->url ?>">
                        <?php echo $value->title ?>
                    </a>
                </p>
                <div class="post__wrap">
                    <?php echo $value->textfield ?>
                </div>
            </div>
        <?php }
        ?>

    <? } ?>
