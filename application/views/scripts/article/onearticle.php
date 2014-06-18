<div class = "news_cell">
    <span class="news__date">
        <?php echo date('d/m/Y', $oneArticle->datetime) ?>
    </span>
    <p>
        <a class="post_header_href" href="<?php echo URL::base(true, true) . $oneArticle->url ?>">
            <?php echo $oneArticle->title ?>
        </a>
    </p>
    <div class="post__wrap">
        <?php echo $oneArticle->textfield ?>
    </div>
    <div class="social_btn">
        <?php if (!empty($tags[$oneArticle->id_post]))
        {
            ?>
            <span class="span_tags">Теги: </span>

            <?php foreach ($tags[$oneArticle->id_post] as $tag)
            {
                ?>
                <a class="link_tags" href="<?php echo URL::base(true, true) . Route::get('tag')->uri(array('tag' => $tag)) ?>"><?php echo $tag ?></a>
                <?php
            }
        }
        ?>
        <div class="soc_btn">

            <script type="text/javascript">
                document.write(VK.Share.button(
                {
                    url: '<?php echo URL::base(true, true) . $oneArticle->url ?>',
                    title: "<?php echo $oneArticle->title ?>",
                    description: ' ',
                    noparse: true,
                    type : 'link_noicon'
  
                }
            ));

            </script>
        </div>
        <div class="soc_btn"><fb:like href="<?php echo URL::base(true, true) . $oneArticle->url ?>" send="false" layout="button_count" width="90" show_faces="true" font="arial"></fb:like></div>
        <div class="soc_btn"> <a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'cm' : '1', 'ck' : '2', 'sz' : '20', 'st' : '3', 'tp' : 'ok'}">Нравится</a>
            <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
        </div>
        <div class="soc_btn">
            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru">Твитнуть</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</div>
<?php
if ($cat->is_comment == 'yes')
{
    ?>

    <!-- Put this div tag to the place, where the Comments block will be -->
    <div id="vk_comments"></div>
    <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 5, width: "696", attach: "photo,audio,link"});
    </script>


<?php } ?>

