<?php
if (count($eventsBeDate) != 0)
{
    ?>

    <?php
    foreach ($eventsBeDate as $key => $value)
    {
        ?> 
        <div class = "news_cell">
            <span class="news__date">
                <?php echo date('d/m/Y', $value->datetime) ?>
            </span>
            <p>
                <a class="post_header_href" href="<?php echo URL::base(true, true) . $value->url ?>">
                    <?php echo $value->title ?>
                </a>
            </p>
            <div class="post__wrap">
                <?php echo $value->textfield ?>
            </div>
            <div class="social_btn">

                <a href="<?php echo URL::base(true, true) . $value->url ?>" class="toPost">
                    Перейти к записи
                </a>
                <?php if ($value->iscomment == 'yes')
                {
                    ?>
                    
        <?php } ?>
            </div>
        </div>
        <?php
    }
}
?>