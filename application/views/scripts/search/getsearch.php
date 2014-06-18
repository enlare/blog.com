<?php
if (count($searchRes) != 0)
{
    foreach ($searchRes as $key => $value)
    {
        ?> 
        <li class = "searchRes">
            <p>
                <a class="searchHeader " href="<?php echo URL::base(true, true) . $value->url ?>">
                    <?php echo $value->title ?>
                </a>
            </p>
            <div class="textPreview">
                <?php
                $searchwords = str_replace(' ', '|', $searchwords);
                echo preg_replace("/($searchwords)/i", '<span class="keywordsRes">\1</span>', (mb_strlen($value->textfield)>400 ? mb_substr($value->textfield,0,398).'..' : $value->textfield));
                ?>
            </div>
        </li>

    <?php
    }
}
?>