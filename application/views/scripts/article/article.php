<div class="news articles__wrapper">
    <?php
    if (count($posts) != 0) {
        ?>

        <?php
        foreach ($posts as $key => $value) {
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
                <?php
                if ($value->iscomment == 'yes') {
                    ?>
                    <div class="social_btn">
                        <?php if(!empty($tags[$value->id_post])){
                        ?>
                            <span class="span_tags">Теги: </span>
                        <?php
                        }?>
                        <?php foreach($tags[$value->id_post] as $tag)
                        {?>
                            <a class="link_tags" href="<?php echo URL::base(true, true).Route::get('tag')->uri(array('tag'=>$tag))?>">
                                <?php echo $tag ?></a>
                        <?php
                        }
                        ?>
                        <a href="<?php echo URL::base(true, true). $value->url ?>" class="toPost">
                            Перейти к записи
                        </a>

                      
                    <?php } ?>
                </div>
            </div>
        <?php }
        ?>
   
    <?php
} else {
    ?>
    нет статей
<?php } ?>
 </div>
<script>
    jQuery(document).ready(function(){
        var n = 1;
        var endLoading = 0;
        <?php if (!empty($nopagination)){?> //Для тегов нет пагинации
            endLoading = 1;
        <?php }?>
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
                        url: baseurl+'ajax/getcontent/'+off, 
                        type: "POST",
                        data: {category: '<?php echo $category?>'},
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