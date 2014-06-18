<?php
if (count($articlesGet) != 0)
{
    ?>

    <?php
    foreach ($articlesGet as $key => $value)
    {
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
              <?php if ($value->iscomment == 'yes')
                    { ?>
           <div class="social_btn">
               <?php if(!empty($tags[$value->id_post])){
                ?>
                    <span class="span_tags">Теги: </span>
                <?php
                }?>
                <?php foreach($tags[$value->id_post] as $tag)
                {?>
                    <a class="link_tags" href="<?php echo URL::base(true, true).Route::get('tag')->uri(array('tag'=>$tag))?>"><?php echo $tag ?></a>
                <?php
                }
?>
            
                <a href="<?php echo URL::base(true, true).$value->url?>" class="toPost">
                    Перейти к записи
                </a>
                
                   
                 <?php   }?>
                </div>
        </div>
    <?php
    }
}
?>