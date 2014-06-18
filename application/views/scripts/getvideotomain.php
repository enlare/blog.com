<?php
if (count($videoGet->as_array()) != 0)
{
    foreach ($videoGet as $key => $value)
    {
        ?>
<div class="video_cell_wrap">
        <div class="forMain">
            
            <?php echo $value->code; ?>            
        </div>
</div>

    <?php
    }
}
?>
