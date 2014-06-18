<div class="news articles__wrapper">
    <?php
    if (count($events) != 0)
    {
        ?>

        <?php
        foreach ($events as $key => $value)
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
        <?php }
        ?>
    </div>
   <?php
}
else
{
    ?>
    событий не надено
<?php } ?>

<script>
jQuery(document).ready(function(){
     var n = 1;
    var endLoading = 0;
    var busy=false;
    $(window).scroll(function(){
        if (endLoading == 1) return;
            
        if ($(document).height() - $(window).height() <= $(window).scrollTop() + 50) 
        {
            if (endLoading == 1) return;
            if (busy == true)
            {
                return;
            }
            else
            {
                busy = true;
                off = n*5;
                jQuery.ajax({
                    url: baseurl+'ajax/getevent/'+off, 
                    type: "POST",
                    success: function (html) { 
                        if (html != '')
                        {
                            jQuery('.articles__wrapper').append(html);
                            busy = false;
                            n = n+1;
                        }
                        else
                        {
                            endLoading = 1;
                        }   
                     } ,
                    dataType: 'html'
                });
            }
        }
               
    })
})
</script>