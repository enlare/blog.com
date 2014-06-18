<div class="news articles__wrapper">
    <?php
    if (count($searchRes) != 0)
    {
        ?>
        <ul id="searchUl">
            <?php
            foreach ($searchRes as $key => $value)
            {
                ?> 
            <li class = "searchRes">
                    <p>
                        <a class="searchHeader" href="<?php echo URL::base(true, true) . $value->url ?>">
                            <?php echo $value->title ?>
                        </a>
                    </p>
                    <div class="textPreview">
                        <?php $searchwords = str_replace(' ', '|', $searchwords);
                        echo preg_replace("/($searchwords)/i", '<span class="keywordsRes">\1</span>', (mb_strlen(strip_tags($value->textfield))>400) ? mb_substr(strip_tags($value->textfield),0,398).'..' : strip_tags($value->textfield));
                        ?>
                    </div>
                </li>

            <?php }
            ?>
    </ul>
    <?php
}
else
{
    ?>
    нет статей
<?php } ?>
</div>
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
                        url: baseurl+'ajax/searchres/'+off, 
                        type: "POST",
                        data: {
                            keyword : <?php echo $searchwords?>
                        },
                        success: function (html) { 
                            if (html != '')
                            {
                                jQuery('#searchUl').append(html);
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