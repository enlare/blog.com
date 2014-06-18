<?php
if (count($commentsGet) != 0)
{
    ?>

    <?php
    foreach ($commentsGet as $key => $value)
    {
        ?>
        <li class="comment_wrap">
            <img class="floating">
            <div class="floating">
                <p><span class="commentator">
                        <?php echo $value->login ?>
                    </span>&nbsp; написал &nbsp;
                    <span class="dateComment">
                        <?php echo date('d/m/y H:i', $value->datetime) ?></span>
                </p>
                <p><?php echo $value->textfield ?></p>
            </div>
        </li>
        <?php
    }
}
?>